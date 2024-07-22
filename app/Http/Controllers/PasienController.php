<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use App\Models\anc;
use App\Models\User;
use App\Models\Pasien;
use App\Models\CobaAnc;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PasienController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'nik' => 'required|unique:pasiens,nik|numeric|digits:16 ',
            'alamat' => 'required|string',
            'ttl' => 'required|date',
            'no_telp' => 'required|string|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',

        ],[
            'name.required' => 'Nama wajib diisi.',
            'email.required'=>'Email wajib diisi',
            'email.unique'=>'Email sudah terdaftar',
            'nik.numeric' => 'Format NIK harus berupa angka.',
            'no_telp.numeric'=> 'Format nomor telpon harus berupa angka',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'password.required'=>'Password wajib diisi',
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'ttl.required' => 'Tanggal lahir wajib diisi.',
            'ttl.date' => 'Format tanggal lahir tidak valid.',
            'no_telp.required' => 'Nomor telepon wajib diisi.',
            'no_telp.string' => 'Nomor telepon harus berupa teks.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        // Buat data pasien
        $pasien = Pasien::create([
            'name' => $validatedData['name'],
            'nik' => $validatedData['nik'],
            'alamat' => $validatedData['alamat'],
            'ttl' => $validatedData['ttl'],
            'no_telp' => $validatedData['no_telp'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'user_id' => $user->id,
        ]);

        
        Session::flash('success', 'Pasien berhasil didaftarkan');
        return redirect('/');
    }

    public function index(){
        $user = auth()->user();
        return view('layouts.users.user-reservasi',compact('user'));
    }
    public function listPasien(){
        $pasiens = Pasien::paginate(5)->onEachSide(1);
        return view('layouts.admin.data-pasien',compact('pasiens'));
    }
    

    public function daftar(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|unique:pasiens,nik|numeric|digits:16 ',
            'alamat' => 'required|string',
            'ttl' => 'required|date',
            'no_telp' => 'required|string|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',

        ],[
            'name.required' => 'Nama wajib diisi.',
            'nik.numeric' => 'Format NIK harus berupa angka.',
            'no_telp.numeric'=> 'Format nomor telpon harus berupa angka',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'ttl.required' => 'Tanggal lahir wajib diisi.',
            'ttl.date' => 'Format tanggal lahir tidak valid.',
            'no_telp.required' => 'Nomor telepon wajib diisi.',
            'no_telp.string' => 'Nomor telepon harus berupa teks.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
        ]);

        $pasien = Pasien::create([
            'name' => $validatedData['name'],
            'nik' => $validatedData['nik'],
            'alamat' => $validatedData['alamat'],
            'ttl' => $validatedData['ttl'],
            'no_telp' => $validatedData['no_telp'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'user_id' => null,
        ]);  
        Session::flash('success','data pasien berhasil disimpan');
        return redirect()->back();
    }

        public function findBynik(Request $request){
            $validatedData = $request->validate([
                'nik_ibu'=> 'required','numeric','digits:16',
                'nik_suami'=> 'required','numeric','digits:16'
            ],[
                'nik_suami.required' => 'nik_suami wajib diisi',
                'nik_suami.numeric' => 'nik_suami harus terdiri dari angka',
                'nik_suami.digits' => 'nik_suami harus terdiri dari 16 digit',
                'nik_ibu.required' => 'nik_ibu wajib diisi',
                'nik_ibu.numeric' => 'nik_ibu harus terdiri dari angka',
                'nik_ibu.digits' => 'nik_ibu harus terdiri dari 16 digit',
            ]);

            $ibu = Pasien::where('nik',$validatedData['nik_ibu'])->first();
            $suami = Pasien::where('nik',$validatedData['nik_suami'])->first();
            if(is_null($ibu) && is_null($suami)){
                return redirect()->back()->with('errors','data nik ibu dan nik suami tidak ditemukan');
            }
            elseif(is_null($ibu)){
                return redirect()->back()->with('errors','data nik ibu tidak ditemukan');
            }
            elseif(is_null($suami)){
                return redirect()->back()->with('errors','data nik suami tidak ditemukan');
            }
            else{
                return view('layouts.admin.kb',compact('ibu','suami'));
            }
    }

    public function tambahPasien(){
        return view('layouts.admin.tambah-pasien');
    }

    public function riwayatKb(){
        $id_user = Auth::user()->id;
        $pasien = Pasien::where('user_id',$id_user)->first();
        if (!$pasien) {
            return redirect('/pasien')->with('error', 'Tidak terdapat riwayat pemeriksaan');
        }
        $id = $pasien->id;
        $kbs = Kb::with(['Suami','Ibu'])->where('id_ibu',$id)->orWhere('id_suami',$id)->paginate(5)->onEachSide(1);
        if($kbs->isEmpty()){
            return view('layouts.users.riwayat-kb2')->with('error','tidak terdapat riwayat pemeriksaan');
        }
        return view('layouts.users.riwayat-kb',compact('kbs'));
    }

    public function riwayatImunisasi(){
        $id_user = Auth::user()->id;
        $pasien = Pasien::where('user_id',$id_user)->first();
        if (!$pasien) {
            return redirect('/pasien')->with('error', 'Tidak terdapat riwayat pemeriksaan');
        }
        $id = $pasien->id;
        $imunisasis = Imunisasi::with(['Ortu','Anak'])->where('id_anak',$id)->orWhere('id_ortu',$id)->orderBy('tanggal', 'desc')->paginate(5)->onEachSide(1);
        if($imunisasis->isEmpty()){
            return view('layouts.users.riwayat-imunisasi2')->with('error','tidak terdapat riwayat pemeriksaan');
        }
        return view('layouts.users.riwayat-imunisasi',compact('imunisasis'));
    }

    public function riwayatBumil(){
        $id_user = Auth::user()->id;
        $pasien = Pasien::where('user_id',$id_user)->first();
        if (!$pasien) {
            return redirect('/pasien')->with('error', 'Tidak terdapat riwayat pemeriksaan');
        }
        $id = $pasien->id;
        $ancs = anc::with(['Suami','Istri'])->where('id_suami',$id)->orWhere('id_istri',$id)->orderBy('tgl_pemeriksaan', 'desc')->paginate(5)->onEachSide(1);
        if($ancs->isEmpty()){
            return view('layouts.users.riwayat-bumil2')->with('error','tidak terdapat riwayat pemeriksaan');
        }
        return view('layouts.users.riwayat-bumil',compact('ancs'));
    }

    public function riwayatByid($id){
        $ancs = anc::with(['Suami','Istri'])->where('id_suami',$id)->orWhere('id_istri',$id)->get();
        $imunisasis = Imunisasi::with(['Ortu','Anak'])->where('id_anak',$id)->orWhere('id_ortu',$id)->get();
        $kbs = Kb::with(['Suami','Ibu'])->where('id_ibu',$id)->orWhere('id_suami',$id)->get(); 
        return view('layouts.admin.riwayat-pasien',compact('ancs','kbs','imunisasis'));
    }
}