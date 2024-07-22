<?php

namespace App\Http\Controllers;

use App\Models\anc;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AncController extends Controller
{
    public function search(Request $request){
        $ancs = anc::where('nama_ibu','like','%'.$request->input('keyword').'%')
                ->orWhere('nama_suami','like','%'.$request->input('keyword').'%')
                ->paginate(10)->onEachSide(1);
        if($ancs->isEmpty()){
            return redirect('/ibu-hamil')->with('errors',"data tidak  ditemukan");
        }
        
        return view('layouts/admin/bumil-table-data',compact('ancs'));
        
    }
    public function showid($id){
        $ancs = anc::with(['Suami','Istri'])->findOrFail($id);
        if(Auth::user()->role=="pasien"){
            return view('layouts.users.detail-bumil',compact('ancs'));
        }
        return view('layouts.admin.detail-bumil',compact('ancs'));
    }
    public function index(){
        $ancs = anc::with(['Suami','Istri'])
        ->orderByDesc('tgl_pemeriksaan')
        ->paginate(5)->onEachSide(1);
        return view('layouts.admin.bumil-table-data',compact('ancs'));
    }
    public function inputnik(Request $request){
        $validatedData = $request->validate([
            'nik_suami'=> 'required','numeric','digits:16',
            'nik_istri'=> 'required','numeric','digits:16'
        ],[
            'nik_istri.required' => 'nik_istri wajib diisi',
            'nik_istri.numeric' => 'nik_istri harus terdiri dari angka',
            'nik_istri.digits' => 'nik_istri harus terdiri dari 16 digit',
            'nik_suami.required' => 'nik_suami wajib diisi',
            'nik_suami.numeric' => 'nik_suami harus terdiri dari angka',
            'nik_suami.digits' => 'nik_suami harus terdiri dari 16 digit',
        ]);

        $suami = Pasien::where('nik',$validatedData['nik_suami'])->first();
        $istri = Pasien::where('nik',$validatedData['nik_istri'])->first();
        if(is_null($suami) && is_null($istri)){
            return redirect()->back()->with('errors','data nik suamii dan nik istri tidak ditemukan');
        }
        elseif(is_null($suami)){
            return redirect()->back()->with('errors','data nik suamii tidak ditemukan');
        }
        elseif(is_null($istri)){
            return redirect()->back()->with('errors','data nik istri tidak ditemukan');
        }
        else{
            return view('layouts.admin.bumil-input-data',compact('suami','istri'));
        }
    }
    public function store(Request $request){
        $validated_data = $request->validate([
            'id_suami' => 'required',
            'id_istri' => 'required',
            'tgl_pemeriksaan' => 'required|date',
            'REG' => 'required|string',
            'buku_kia' => 'required|boolean',
            'pekerjaan_ibu' => 'required|string',
            'pekerjaan_suami' => 'required|string',
            'no_kk' => 'required|string',
            'pddk_ibu' => 'required|string',
            'pddk_suami' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'paritas' => 'required|string',
            'parsing' => 'required|string',
            'p4k' => 'required|boolean',
            'HPPT' => 'required|date',
            'HPL' => 'required|date',
            'umur_kehamilan' => 'required|string',
            'anamnesa' => 'required|string',
            'TB' => 'required|integer',
            'LILA' => 'required|integer',
            'BB' => 'required|integer',
            'TFU' => 'required|integer',
            'tensi' => 'required|string',
            'status_TT1_K1' => 'required|string',
            'TM' => 'required|string',
            'FE' => 'required|string',
            'BAT_LAIN' => 'required|string',
            'PRESENTASI' => 'required|string',
            'DJJ' => 'required|string',
            'KEPALA_THD_PAP' => 'required|string',
            'TBJ' => 'required|string',
            'Protein_urine' => 'required|string',
            'GOLDAR' => 'required|string',
            'HBSAG' => 'required|string',
            'IMS' => 'required|string',
            'HIV' => 'required|string',
            'HDK' => 'required|boolean',
            'ABORTUS' => 'required|boolean',
            'PERDARAHAN' => 'required|boolean',
            'INFEKSI' => 'required|boolean',
            'KPD' => 'required|boolean',
            'LAIN_LAIN' => 'required|string',
            'RUJUK' => 'required|string',
            'trisemester1' => 'required|integer',
            'trisemester2' => 'required|integer',
            'trisemester3' => 'required|integer',
            'FR' => 'required|string',
            'HB' => 'required|string',
            'keterangan' => 'required|string',

        ], [
            'required' => ':attribute wajib diisi.',
            'date' => ':attribute harus dalam format tanggal yang valid.',
            'string' => ':attribute harus berupa teks.',
            'boolean' => ':attribute harus bernilai benar atau salah.',
            'integer' => ':attribute harus berupa angka.',
        ]);

        $anc = anc::create($validated_data);
        Session::flash('success','data Ibu Hamil berhasil ditambahkan');
        return redirect('/ibu-hamil');
    }

    public function destroy($id){
        $anc = anc::findOrFail($id);
        $anc->delete();
        Session::flash('success','data Ibu Hamil berhasil dihapus');
        return redirect('/ibu-hamil');
    }

    public function update(Request $request,$id){
        $validated_data = $request->validate([
            'tgl_pemeriksaan' => 'required|date',
            'REG' => 'required|string',
            'nama_ibu' => 'required|string',
            'buku_kia' => 'required|boolean',
            'pekerjaan_ibu' => 'required|string',
            'pekerjaan_suami' => 'required|string',
            'no_kk' => 'required|string',
            'nama_suami' => 'required|string',
            'nik_ibu' => 'required|string',
            'nik_suami' => 'required|string',
            'tgl_lahir_ibu' => 'required|date',
            'tgl_lahir_suami' => 'required|date',
            'pddk_ibu' => 'required|string',
            'pddk_suami' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'paritas' => 'required|string',
            'parsing' => 'required|string',
            'p4k' => 'required|boolean',
            'HPPT' => 'required|date',
            'HPL' => 'required|date',
            'umur_kehamilan' => 'required|string',
            'anamnesa' => 'required|string',
            'TB' => 'required|integer',
            'LILA' => 'required|integer',
            'BB' => 'required|integer',
            'TFU' => 'required|integer',
            'tensi' => 'required|string',
            'status_TT1_K1' => 'required|string',
            'TM' => 'required|string',
            'FE' => 'required|string',
            'BAT_LAIN' => 'required|string',
            'PRESENTASI' => 'required|string',
            'DJJ' => 'required|string',
            'KEPALA_THD_PAP' => 'required|string',
            'TBJ' => 'required|string',
            'Protein_urine' => 'required|string',
            'GOLDAR' => 'required|string',
            'HBSAG' => 'required|string',
            'IMS' => 'required|string',
            'HIV' => 'required|string',
            'HDK' => 'required|boolean',
            'ABORTUS' => 'required|boolean',
            'PERDARAHAN' => 'required|boolean',
            'INFEKSI' => 'required|boolean',
            'KPD' => 'required|boolean',
            'LAIN_LAIN' => 'required|string',
            'RUJUK' => 'required|string',
            'trisemester1' => 'required|integer',
            'trisemester2' => 'required|integer',
            'trisemester3' => 'required|integer',
            'FR' => 'required|string',
            'keterangan' => 'required|string',
        ], [
            'required' => ':attribute wajib diisi.',
            'date' => ':attribute harus dalam format tanggal yang valid.',
            'string' => ':attribute harus berupa teks.',
            'boolean' => ':attribute harus bernilai benar atau salah.',
            'integer' => ':attribute harus berupa angka.',
        ]);
        $anc = anc::findOrFail($id);
        $anc->update($validated_data);
        Session::flash('success','data Ibu Hamil berhasil diupdate');
        return redirect('/ibu-hamil');
    }

    public function LaporanBulanan(){
        $now = Carbon::now('Asia/Jakarta');
        $tahun = $now->year;
        $bulan = $now->month;
        $ancs = anc::with(['Suami','Istri'])
        ->whereYear('tgl_pemeriksaan',$tahun)   
        ->whereMonth('tgl_pemeriksaan',$bulan)
        ->get();
        $pdf = PDF::loadview('layouts.admin.cetak-bumil-pdf',['ancs'=>$ancs])->setPaper('a4', 'landscape');;
        return  $pdf->stream('layouts.admin.cetak-bumil-pdf');
    }

    public function riwayat($id){
        $ancs = anc::with(['Suami','Istri'])->where('id_suami',$id)->orWhere('id_istri',$id)->paginate(5)->onEachSide(1);
        if($ancs->isEmpty()){
            return view('layouts.admin.bumil-table-data')->with('error','tidak terdapat riwayat pemeriksaan');
        }
        return view('layouts.admin.bumil-table-data',compact('ancs'));
    }  
}