<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\Pasien;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ImunisasiController extends Controller
{
    public function search(Request $request)
    {
        $validatedData = $request->validate(
            [
                'keyword' => 'required',
            ],
            ['keyword' => 'perlu keyword'],
        );

        $keyword = $request->input('keyword');

        $imunisasis = Imunisasi::whereHas('Anak', function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        })
            ->with(['Ortu', 'Anak'])
            ->orderByDesc('tanggal')
            ->paginate(5)
            ->onEachSide(1);
        if ($imunisasis->isEmpty()) {
            return view('layouts.admin.dashboard-admin', compact('imunisasis'))->with('errors', 'Data tidak ditemukan');
        } else {
            return view('layouts.admin.dashboard-admin', compact('imunisasis'));
        }
    }
    public function index()
    {
        $imunisasis = Imunisasi::with(['Ortu', 'Anak'])
            ->orderBy('tanggal', 'desc')
            ->paginate(5)
            ->onEachSide(1);
        if ($imunisasis->isEmpty()) {
            return view('layouts/admin/dashboard-admin', compact('imunisasis'))->with('errors', 'data kosong');
        } else {
            return view('layouts/admin/dashboard-admin', compact('imunisasis'));
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'id_anak' => 'required|exists:pasiens,id',
                'id_ortu' => 'required|exists:pasiens,id',
                'berat_badan' => 'required|numeric',
                'panjang_badan' => 'required|numeric',
                'HBO' => 'required|boolean',
                'BCG' => 'required|boolean',
                'PENTA' => 'required|in:0,1,2,3',
                'IPV' => 'required|in:0,1,2,3',
                'PCV' => 'required|in:0,1,2,3',
                'ROTA_VIRUS' => 'required|in:0,1,2,3',
                'MK' => 'required|boolean',
                'booster' => 'required|in:PENTA,MK,0',
                'tanggal' => 'required|date',
                'kipi' => 'required|string',
                'vaksin' => 'required|string',
            ],
            [
                'kipi.required' => 'kipi harus diisi',
                'kipi.string' => 'kipi harus berupa karakter',
                'vaksin.required' => 'vaksin harus diisi',
                'vaksin.string' => 'vaksin harus berupa karakter',
                'berat_badan.required' => 'Berat badan harus diisi.',
                'berat_badan.numeric' => 'Berat badan harus berupa angka.',
                'panjang_badan.required' => 'Panjang badan harus diisi.',
                'panjang_badan.numeric' => 'Panjang badan harus berupa angka.',
                'HBO.required' => 'Kolom HBO harus diisi.',
                'HBO.boolean' => 'Kolom HBO harus berupa benar atau salah.',
                'BCG.required' => 'Kolom BCG harus diisi.',
                'BCG.boolean' => 'Kolom BCG harus berupa benar atau salah.',
                'PENTA.required' => 'Kolom PENTA harus diisi.',
                'PENTA.in' => 'Kolom PENTA harus memiliki nilai 0, 1, 2, atau 3.',
                'IPV.required' => 'Kolom IPV harus diisi.',
                'IPV.in' => 'Kolom IPV harus memiliki nilai 0, 1, 2, atau 3.',
                'PCV.required' => 'Kolom PCV harus diisi.',
                'PCV.in' => 'Kolom PCV harus memiliki nilai 0, 1, 2, atau 3.',
                'ROTA_VIRUS.required' => 'Kolom ROTA VIRUS harus diisi.',
                'ROTA_VIRUS.in' => 'Kolom ROTA VIRUS harus memiliki nilai 0, 1, 2, atau 3.',
                'MK.required' => 'Kolom MK harus diisi.',
                'MK.boolean' => 'Kolom MK harus berupa benar atau salah.',
                'booster.required' => 'Kolom Booster harus diisi.',
                'booster.in' => 'Kolom Booster harus memiliki nilai PENTA atau MK.',
                'tanggal.required' => 'Tanggal harus diisi.',
                'id_anak.required' => 'ID anak harus diisi.',
                'id_anak.exists' => 'ID anak harus ada dalam tabel pasien.',
                'id_ortu.required' => 'ID ortu harus diisi.',
                'id_ortu.exists' => 'ID ortu harus ada dalam tabel pasien.',
            ],
        );
        $imunisasi = Imunisasi::create($validatedData);
        Session::flash('success', 'Data Imunisasi berhasil disimpan');
        return redirect('/admin');
    }
    public function inputnik(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nik_ortu' => 'required',
                'numeric',
                'digits:16',
                'nik_anak' => 'required',
                'numeric',
                'digits:16',
            ],
            [
                'nik_anak.required' => 'nik_anak wajib diisi',
                'nik_anak.numeric' => 'nik_anak harus terdiri dari angka',
                'nik_anak.digits' => 'nik_anak harus terdiri dari 16 digit',
                'nik_ortu.required' => 'nik_ortu wajib diisi',
                'nik_ortu.numeric' => 'nik_ortu harus terdiri dari angka',
                'nik_ortu.digits' => 'nik_ortu harus terdiri dari 16 digit',
            ],
        );

        $ortu = Pasien::where('nik', $validatedData['nik_ortu'])->first();
        $anak = Pasien::where('nik', $validatedData['nik_anak'])->first();
        if (is_null($ortu) && is_null($anak)) {
            return redirect()->back()->with('errors', 'data nik ortu dan nik anak tidak ditemukan');
        } elseif (is_null($ortu)) {
            return redirect()->back()->with('errors', 'data nik ortu tidak ditemukan');
        } elseif (is_null($anak)) {
            return redirect()->back()->with('errors', 'data nik anak tidak ditemukan');
        } else {
            return view('layouts.admin.input-table-imunisasi', compact('ortu', 'anak'));
        }
    }

    public function showByid($id)
    {
        $imunisasi = Imunisasi::with(['Ortu', 'Anak'])->find($id);
        if (is_null($imunisasi)) {
            return redirect()->back()->with('errors', 'data tidak ditemukan');
        } 
        if(Auth::user()->role=="pasien"){
            return view('layouts.users.detail-table-imunisasi',compact('imunisasi'));
        }
        return view('layouts.admin.detail-table-imunisasi', compact('imunisasi'));
        
    }

    public function destroy($id)
    {
        $imunisasi = Imunisasi::find($id);
        if (is_null($imunisasi)) {
            return redirect()->back()->with('errors', 'data tidak ditemukan');
        } else {
            $imunisasi->delete();
            Session::flash('success', 'data imunisasi berhasil dihapus');
            return redirect('/admin');
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'id_anak' => 'required|exists:pasiens,id',
                'id_ortu' => 'required|exists:pasiens,id',
                'berat_badan' => 'required|numeric',
                'panjang_badan' => 'required|numeric',
                'HBO' => 'required|boolean',
                'BCG' => 'required|boolean',
                'PENTA' => 'required|in:0,1,2,3',
                'IPV' => 'required|in:0,1,2,3',
                'PCV' => 'required|in:0,1,2,3',
                'ROTA_VIRUS' => 'required|in:0,1,2,3',
                'MK' => 'required|boolean',
                'booster' => 'required|in:PENTA,MK,0',
                'tanggal' => 'required|date',
                'kipi' => 'required|string',
                'vaksin' => 'required|string',
            ],
            [
                'kipi.required' => 'kipi harus diisi',
                'kipi.string' => 'kipi harus berupa karakter',
                'vaksin.required' => 'vaksin harus diisi',
                'vaksin.string' => 'vaksin harus berupa karakter',
                'berat_badan.required' => 'Berat badan harus diisi.',
                'berat_badan.numeric' => 'Berat badan harus berupa angka.',
                'panjang_badan.required' => 'Panjang badan harus diisi.',
                'panjang_badan.numeric' => 'Panjang badan harus berupa angka.',
                'HBO.required' => 'Kolom HBO harus diisi.',
                'HBO.boolean' => 'Kolom HBO harus berupa benar atau salah.',
                'BCG.required' => 'Kolom BCG harus diisi.',
                'BCG.boolean' => 'Kolom BCG harus berupa benar atau salah.',
                'PENTA.required' => 'Kolom PENTA harus diisi.',
                'PENTA.in' => 'Kolom PENTA harus memiliki nilai 0, 1, 2, atau 3.',
                'IPV.required' => 'Kolom IPV harus diisi.',
                'IPV.in' => 'Kolom IPV harus memiliki nilai 0, 1, 2, atau 3.',
                'PCV.required' => 'Kolom PCV harus diisi.',
                'PCV.in' => 'Kolom PCV harus memiliki nilai 0, 1, 2, atau 3.',
                'ROTA_VIRUS.required' => 'Kolom ROTA VIRUS harus diisi.',
                'ROTA_VIRUS.in' => 'Kolom ROTA VIRUS harus memiliki nilai 0, 1, 2, atau 3.',
                'MK.required' => 'Kolom MK harus diisi.',
                'MK.boolean' => 'Kolom MK harus berupa benar atau salah.',
                'booster.required' => 'Kolom Booster harus diisi.',
                'booster.in' => 'Kolom Booster harus memiliki nilai PENTA atau MK.',
                'tanggal.required' => 'Tanggal harus diisi.',
                'id_anak.required' => 'ID anak harus diisi.',
                'id_anak.exists' => 'ID anak harus ada dalam tabel pasien.',
                'id_ortu.required' => 'ID ortu harus diisi.',
                'id_ortu.exists' => 'ID ortu harus ada dalam tabel pasien.',
            ],
        );
        $imunisasi = Imunisasi::find($id);
        if (is_null($imunisasi)) {
            return redirect()->back()->with('errors', 'data tidak ditemukan');
        } else {
            $imunisasi->update($validatedData);
            Session::flash('success', 'data imunisasi berhasil diupdate');
            return redirect('/admin');
        }
    }

    public function laporanImunisasi($year, $month)
    {
        $imunisasis = Imunisasi::with(['Anak', 'Ortu'])
            ->whereYear('tanggal', $year)
            ->whreMonth('tanggal', $month)
            ->get();
        return view('', compact('imunisasis'));
    }

    public function LaporanBulanan(){
        $now = Carbon::now('Asia/Jakarta');
        $tahun = $now->year;
        $bulan = $now->month;
        $imunisasis = Imunisasi::with(['anak','Ortu'])
        ->whereYear('tanggal',$tahun)
        ->whereMonth('tanggal',$bulan)
        ->get();
        $pdf = PDF::loadview('layouts.admin.cetak-imunisasi-pdf',['imunisasis'=>$imunisasis])->setPaper('a4', 'landscape');;
        return  $pdf->stream('layouts.admin.cetak-imunisasi-pdf');
    }

    public function riwayat($id){
        $imunisasis = Imunisasi::with(['Ortu','Anak'])->where('id_anak',$id)->orWhere('id_ortu',$id)->paginate(5)->onEachSide(1);
        if($imunisasis->isEmpty()){
            return view('layouts.admin.dashboard-admin')->with('error','tidak terdapat riwayat pemeriksaan');
        }
        return view('layouts.admin.dashboard-admin',compact('imunisasis'));
    }
}