<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Kb;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class KbController extends Controller
{
    public function riwayat($id){
        $kbs = Kb::with(['Suami','Ibu'])->where('id_ibu',$id)->orWhere('id_suami',$id)->paginate(5)->onEachSide(1);
        if($kbs->isEmpty()){
            return view('')->with('error','tidak terdapat riwayat pemeriksaan');
        }
        return view('layouts.admin.data-kb',compact('kbs'));
    }
    public function index(){
        $kbs = Kb::with(['Ibu','Suami'])->paginate(5)->onEachSide(1);
        return view('layouts.admin.data-kb',compact('kbs'));    
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'tgl_kb' => 'required|date',
            'jmlh_anak' => 'required|integer|min:0',
            'umur_anak_terkecil' => 'required|integer|min:0',
            'jaminan' => 'required|string|max:255',
            'alki' => 'required|string|max:255',
            'pasca_plasenta' => 'required|string|max:255',
            'pasca_salin' => 'required|string|max:255',
            'do' => 'required|string|max:255',
            'gc_dari' => 'required|string|max:255',
            'metode_kb' => 'required|in:IUD,STK,PIL,CO',
            'berat_badan' => 'required|integer|min:0',
            'tinggi_badan' => 'required|integer|min:0',
            'tensi' => 'required|string|max:255',
            'lila' => 'required|integer|min:0',
            'tgl_kembali' => 'required|date',
            'kegagalan' => 'required|string|max:255',
            'inform_consent' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
            'id_suami' => 'required|exists:pasiens,id',
            'id_ibu' => 'required|exists:pasiens,id',
        ],[
            'tgl_kb.required' => 'Tanggal KB harus diisi.',
            'tgl_kb.date' => 'Format tanggal KB tidak valid.',
            'jmlh_anak.required' => 'Jumlah anak harus diisi.',
            'jmlh_anak.integer' => 'Jumlah anak harus berupa angka.',
            'jmlh_anak.min' => 'Jumlah anak tidak boleh kurang dari 0.',
            'umur_anak_terkecil.required' => 'Umur anak terkecil harus diisi.',
            'umur_anak_terkecil.integer' => 'Umur anak terkecil harus berupa angka.',
            'umur_anak_terkecil.min' => 'Umur anak terkecil tidak boleh kurang dari 0.',
            'jaminan.required' => 'Jaminan harus diisi.',
            'jaminan.string' => 'Jaminan harus berupa teks.',
            'jaminan.max' => 'Jaminan tidak boleh lebih dari 255 karakter.',
            'alki.required' => 'Alki harus diisi.',
            'alki.string' => 'Alki harus berupa teks.',
            'alki.max' => 'Alki tidak boleh lebih dari 255 karakter.',
            'pasca_plasenta.required' => 'Pasca plasenta harus diisi.',
            'pasca_plasenta.string' => 'Pasca plasenta harus berupa teks.',
            'pasca_plasenta.max' => 'Pasca plasenta tidak boleh lebih dari 255 karakter.',
            'pasca_salin.required' => 'Pasca salin harus diisi.',
            'pasca_salin.string' => 'Pasca salin harus berupa teks.',
            'pasca_salin.max' => 'Pasca salin tidak boleh lebih dari 255 karakter.',
            'do.required' => 'DO harus diisi.',
            'do.string' => 'DO harus berupa teks.',
            'do.max' => 'DO tidak boleh lebih dari 255 karakter.',
            'gc_dari.required' => 'GC dari harus diisi.',
            'gc_dari.string' => 'GC dari harus berupa teks.',
            'gc_dari.max' => 'GC dari tidak boleh lebih dari 255 karakter.',
            'metode_kb.required' => 'Metode KB harus diisi.',
            'metode_kb.in' => 'Metode KB harus salah satu dari: IUD, STK, PIL, CO.',
            'berat_badan.required' => 'Berat badan harus diisi.',
            'berat_badan.integer' => 'Berat badan harus berupa angka.',
            'berat_badan.min' => 'Berat badan tidak boleh kurang dari 0.',
            'tinggi_badan.required' => 'Tinggi badan harus diisi.',
            'tinggi_badan.integer' => 'Tinggi badan harus berupa angka.',
            'tinggi_badan.min' => 'Tinggi badan tidak boleh kurang dari 0.',
            'tensi.required' => 'Tensi harus diisi.',
            'tensi.string' => 'Tensi harus berupa teks.',
            'tensi.max' => 'Tensi tidak boleh lebih dari 255 karakter.',
            'lila.required' => 'Lila harus diisi.',
            'lila.integer' => 'Lila harus berupa angka.',
            'lila.min' => 'Lila tidak boleh kurang dari 0.',
            'tgl_kembali.required' => 'Tanggal kembali harus diisi.',
            'tgl_kembali.date' => 'Format tanggal kembali tidak valid.',
            'kegagalan.required' => 'Kegagalan harus diisi.',
            'kegagalan.string' => 'Kegagalan harus berupa teks.',
            'kegagalan.max' => 'Kegagalan tidak boleh lebih dari 255 karakter.',
            'inform_consent.required' => 'Inform consent harus diisi.',
            'inform_consent.string' => 'Inform consent harus berupa teks.',
            'inform_consent.max' => 'Inform consent tidak boleh lebih dari 255 karakter.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 255 karakter.',
            'id_suami.required' => 'ID suami harus diisi.',
            'id_suami.exists' => 'ID suami harus ada dalam tabel users.',
            'id_ibu.required' => 'ID ibu harus diisi.',
            'id_ibu.exists' => 'ID ibu harus ada dalam tabel users.',
        ]);
        $kb = Kb::create($validatedData);
        Session::flash('success','data kb berhasil disimpan');
        return redirect('/data-kb'); 
    }

    public function showByid($id){
        $kb = Kb::with(['Ibu','Suami'])->find($id);
        if(is_null($kb)){
            return redirect()->back()->with('errors','data tidak ditemukan');
        }
        if(Auth::user()->role=="pasien"){
            return view('layouts.users.detail-kb',compact('kb'));
        }
        
        return view('layouts.admin.detail-kb',compact('kb'));
        
    }

    public function destroy($id){
        $kb = Kb::find($id);
        if(is_null($kb)){
            return redirect()->back()->with('errors','data tidak ditemukan');
        }
       
        $kb->delete();
        Session::flash('success','data kb berhasil dihapus');
        return redirect('/data-kb');
        
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'tgl_kb' => 'required|date',
            'jmlh_anak' => 'required|integer|min:0',
            'umur_anak_terkecil' => 'required|integer|min:0',
            'jaminan' => 'required|string|max:255',
            'alki' => 'required|string|max:255',
            'pasca_plasenta' => 'required|string|max:255',
            'pasca_salin' => 'required|string|max:255',
            'do' => 'required|string|max:255',
            'gc_dari' => 'required|string|max:255',
            'metode_kb' => 'required|in:IUD,STK,PIL,CO',
            'berat_badan' => 'required|integer|min:0',
            'tinggi_badan' => 'required|integer|min:0',
            'tensi' => 'required|string|max:255',
            'lila' => 'required|integer|min:0',
            'tgl_kembali' => 'required|date',
            'kegagalan' => 'required|string|max:255',
            'inform_consent' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
            'id_suami' => 'required|exists:pasiens,id',
            'id_ibu' => 'required|exists:pasiens,id',
        ],[
            'tgl_kb.required' => 'Tanggal KB harus diisi.',
            'tgl_kb.date' => 'Format tanggal KB tidak valid.',
            'jmlh_anak.required' => 'Jumlah anak harus diisi.',
            'jmlh_anak.integer' => 'Jumlah anak harus berupa angka.',
            'jmlh_anak.min' => 'Jumlah anak tidak boleh kurang dari 0.',
            'umur_anak_terkecil.required' => 'Umur anak terkecil harus diisi.',
            'umur_anak_terkecil.integer' => 'Umur anak terkecil harus berupa angka.',
            'umur_anak_terkecil.min' => 'Umur anak terkecil tidak boleh kurang dari 0.',
            'jaminan.required' => 'Jaminan harus diisi.',
            'jaminan.string' => 'Jaminan harus berupa teks.',
            'jaminan.max' => 'Jaminan tidak boleh lebih dari 255 karakter.',
            'alki.required' => 'Alki harus diisi.',
            'alki.string' => 'Alki harus berupa teks.',
            'alki.max' => 'Alki tidak boleh lebih dari 255 karakter.',
            'pasca_plasenta.required' => 'Pasca plasenta harus diisi.',
            'pasca_plasenta.string' => 'Pasca plasenta harus berupa teks.',
            'pasca_plasenta.max' => 'Pasca plasenta tidak boleh lebih dari 255 karakter.',
            'pasca_salin.required' => 'Pasca salin harus diisi.',
            'pasca_salin.string' => 'Pasca salin harus berupa teks.',
            'pasca_salin.max' => 'Pasca salin tidak boleh lebih dari 255 karakter.',
            'do.required' => 'DO harus diisi.',
            'do.string' => 'DO harus berupa teks.',
            'do.max' => 'DO tidak boleh lebih dari 255 karakter.',
            'gc_dari.required' => 'GC dari harus diisi.',
            'gc_dari.string' => 'GC dari harus berupa teks.',
            'gc_dari.max' => 'GC dari tidak boleh lebih dari 255 karakter.',
            'metode_kb.required' => 'Metode KB harus diisi.',
            'metode_kb.in' => 'Metode KB harus salah satu dari: IUD, STK, PIL, CO.',
            'berat_badan.required' => 'Berat badan harus diisi.',
            'berat_badan.integer' => 'Berat badan harus berupa angka.',
            'berat_badan.min' => 'Berat badan tidak boleh kurang dari 0.',
            'tinggi_badan.required' => 'Tinggi badan harus diisi.',
            'tinggi_badan.integer' => 'Tinggi badan harus berupa angka.',
            'tinggi_badan.min' => 'Tinggi badan tidak boleh kurang dari 0.',
            'tensi.required' => 'Tensi harus diisi.',
            'tensi.string' => 'Tensi harus berupa teks.',
            'tensi.max' => 'Tensi tidak boleh lebih dari 255 karakter.',
            'lila.required' => 'Lila harus diisi.',
            'lila.integer' => 'Lila harus berupa angka.',
            'lila.min' => 'Lila tidak boleh kurang dari 0.',
            'tgl_kembali.required' => 'Tanggal kembali harus diisi.',
            'tgl_kembali.date' => 'Format tanggal kembali tidak valid.',
            'kegagalan.required' => 'Kegagalan harus diisi.',
            'kegagalan.string' => 'Kegagalan harus berupa teks.',
            'kegagalan.max' => 'Kegagalan tidak boleh lebih dari 255 karakter.',
            'inform_consent.required' => 'Inform consent harus diisi.',
            'inform_consent.string' => 'Inform consent harus berupa teks.',
            'inform_consent.max' => 'Inform consent tidak boleh lebih dari 255 karakter.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 255 karakter.',
            'id_suami.required' => 'ID suami harus diisi.',
            'id_suami.exists' => 'ID suami harus ada dalam tabel users.',
            'id_ibu.required' => 'ID ibu harus diisi.',
            'id_ibu.exists' => 'ID ibu harus ada dalam tabel users.',
        ]);
        $kb = Kb::find($id);
        if(is_null($kb)){
            return redirect()->back()->with('errors','data tidak ditemukan');
        }
        else{
            $kb->update($validatedData);
            Session::flash('success','data kb berhasil diupdate');
            return redirect('/data-kb');
        }
    }
    public function search(Request $request){
        $searchTerm = $request->input('keyword');

        $kbs = Kb::with(['Ibu','Suami'])->whereHas('Ibu', function($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('nik', 'like', '%' . $searchTerm . '%');
            })
            ->orWhereHas('Suami', function($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('nik', 'like', '%' . $searchTerm . '%');
            })
            ->get();
        return view('',compact('kbs'));
    }
    public function inputNik(){
        return view('layouts.admin.daftar-pasien');
    }
    public function formKb(){
        return view('layouts.admin.kb');
    }

    

    public function LaporanBulanan(){
        $now = Carbon::now('Asia/Jakarta');
        $tahun = $now->year;
        $bulan = $now->month;
        $kbs = Kb::with(['Suami','Ibu'])
        ->whereYear('tgl_kb',$tahun)   
        ->whereMonth('tgl_kb',$bulan)
        ->get();
        $pdf = PDF::loadview('layouts.admin.cetak-kb-dompdf',['kbs'=>$kbs])->setPaper('a4', 'landscape');;
        return  $pdf->stream();
    }
}