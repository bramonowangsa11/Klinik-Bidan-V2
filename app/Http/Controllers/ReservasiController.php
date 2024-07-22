<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservasiController extends Controller
{   
    public function sesibyDate(Request $request){
        $tgl = $request['tgl_reservasi'];
        $tgl_reservasi = Carbon::parse($tgl);
        $hSebelumReservasi = $tgl_reservasi->copy();
        $today = Carbon::now();
        
        if($today->lt($hSebelumReservasi)){
            $allSessions = ['06:00', '06:30', '07:00', '07:30', '08:00', '08:30', '16:00', 
                            '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30'];
            $selectedSessions = Reservasi::where('tgl_reservasi', $tgl_reservasi)
                ->pluck('sesi')->toArray();
            $availableSessions = array_diff($allSessions, $selectedSessions);
            return view('layouts.users.user-reservasi2',compact('tgl','availableSessions'));
            
        }
        else{
            return redirect()->back()->with('errors', 'reservasi hanya bisa dilakukan maks h-1 dari tanggal reservasi');
        } 
    }
    public function index(){
        if(Auth::user()->role == "admin"){
            $reservasis = Reservasi::with('user')->orderBy('tgl_reservasi', 'desc')->paginate(5)->onEachSide(1);
            return view('layouts.admin.lihat-reservasi',compact('reservasis'));
        }
        else{
            $id_user = Auth::user()->id;
            $reservasis = Reservasi::with('user')->where('user_id',$id_user)->orderBy('tgl_reservasi', 'desc')->paginate(5)->onEachSide(1);
            return view('layouts.users.lihat-reservasi-user',compact('reservasis'));
        }
        
    }

    public function store(Request $request){
        $validated_data = $request->validate([
            'tgl_reservasi' => 'required|date',
            'sesi' => 'required|in:06:00,06:30,07:00,07:30,08:00,08:30,16:00,16:30,17:00,17:30,18:00,18:30,19:00,19:30',
            'layanan' => 'required|in:Bumil,KB,Imunisasi',
            'keterangan' => 'required|string|max:255'
        ],[
            'tgl_reservasi.required' => 'Tanggal reservasi wajib diisi.',
            'tgl_reservasi.date' => 'Tanggal reservasi harus dalam format tanggal yang valid.',
            'sesi.required' => 'Sesi wajib dipilih.',
            'sesi.in' => 'Sesi yang dipilih tidak valid.',
            'layanan.required' => 'Layanan wajib dipilih.',
            'layanan.in' => 'Layanan yang dipilih tidak valid.',
            'keterangan.required' => 'Keterangan wajib diisi.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 255 karakter.',
        ]);
        $tgl = $validated_data['tgl_reservasi'];
        $sesi = $validated_data['sesi'];
        $reservasiSama = Reservasi::where('tgl_reservasi',$tgl)
            ->where('sesi',$sesi)
            ->exists(); 
        if($reservasiSama){
            return redirect()->back()->with('errors', 'sudah terdapat reservasi pada sesi dan tanggal tersebut');
        }
        else{
            $validated_data['user_id'] = Auth::user()->id;
            $reservasis = Reservasi::create($validated_data);
            Session::flash('success', 'reservasi berhasil didaftarkan');
            if(Auth::user()->role=='pasien'){
                return redirect('/pasien');
            }
            else{
                return redirect('/daftar-reservasi');
            }
            
        }
    }

    public function destroy($id){
        if(Auth::user()->role == "pasien"){
            $reservasis = Reservasi::findOrfail($id);
            $tgl = $reservasis["tgl_reservasi"];
            $sesi = $reservasis["sesi"];
            $tgl_jam = $tgl.' '.$sesi;
            $waktu_reservasi = Carbon::createFromFormat('Y-m-d H:i', $tgl_jam,'Asia/Jakarta');
            $now = Carbon::now('Asia/Jakarta');
            $perbedaanJam = $waktu_reservasi->diffInHours($now);
            if($perbedaanJam<3){
                return redirect()->back()->with('errors','pembatalan reservasi hanya dapat dilakukan 3 jam sebelum waktu reservasi');
            }
            else{
                $reservasis->delete();
                Session::flash('success','data berhasil dihapus');
                return redirect()->back();
            }
        }
        else{
            $reservasi = Reservasi::findOrfail($id);
            $reservasi->delete();
            Session::flash('success','data berhasil dihapus');
            return redirect()->back();
        }
        
        
    }
    public function todayReservation(){
        $now = Carbon::now('Asia/Jakarta');
        $reservasis = Reservasi::with(['user'])
            ->whereDate('tgl_reservasi',$now)->paginate(5)->onEachSide(1);
        return view('layouts.admin.lihat-reservasi',compact('reservasis'));
    }

    

}