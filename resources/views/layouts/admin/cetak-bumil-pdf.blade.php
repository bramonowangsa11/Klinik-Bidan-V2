@extends('layouts.bootstrap')
@section('content')
<style>
    @media print {
        .page {
            page-break-after: always;
        }
    }
    .page {
        page-break-after: always;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 5px;
        text-align: left;
        word-wrap: break-word;
    }
    th {
        background-color: #f2f2f2;
    }
    td {
        max-width: 150px;
        white-space: normal;
    }
</style>

<div class="d-flex">
    <div class="content flex-grow-1 p-2" style="width: 100%;">
        @if(count($ancs) > 0)
            <div class="row">
                <div class="col-12 page">
                    <h5>Halaman 1</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Buku KIA</th>
                                <th>Nama Ibu</th>
                                <th>NIK Ibu</th>
                                <th>Tgl Lahir Ibu</th>
                                <th>Umur Ibu</th>
                                <th>Pendidikan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nama Suami</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ancs as $key => $anc)
                            <tr>
                                <td>{{ $anc->tgl_pemeriksaan }}</td>
                                <td>{{ $anc->buku_kia }}</td>
                                <td>{{ $anc->Istri->name }}</td>
                                <td>{{ $anc->Istri->nik }}</td>
                                <td>{{ $anc->Istri->ttl }}</td>
                                <td>{{ $anc->pddk_ibu }}</td>
                                <td>{{ $anc->pekerjaan_ibu }}</td>
                                <td>{{ $anc->Suami->name }}</td>
                                <td>{{ $anc->FE }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 page">
                    <h5>Halaman 2</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NIK Suami</th>
                                <th>No KK</th>
                                <th>Alamat</th>
                                <th>Paritas</th>
                                <th>Spasing</th>
                                <th>P4K/Rencana Kelahiran</th>
                                <th>HPHT</th>
                                <th>HPL</th>
                                <th>Umur Kehamilan (Minggu)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ancs as $key => $anc)
                            <tr>
                                <td>{{ $anc->Suami->nik }}</td>
                                <td>{{ $anc->no_kk }}</td>
                                <td>{{ $anc->Suami->alamat }}</td>
                                <td>{{ $anc->paritas }}</td>
                                <td>{{ $anc->parsing }}</td>
                                <td>{{ $anc->p4k }}</td>
                                <td>{{ $anc->HPPT }}</td>
                                <td>{{ $anc->HPL }}</td>
                                <td>{{ $anc->umur_kehamilan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 page">
                    <h5>Halaman 3</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Anamesa Kehamilan</th>
                                <th>Tinggi Badan</th>
                                <th>LILA</th>
                                <th>Berat Badan</th>
                                <th>TFU</th>
                                <th>Tensi</th>
                                <th>Status TT K1</th>
                                <th>TM/K1/K4</th>
                                <th>FE1/FE2/FE3</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ancs as $key => $anc)
                            <tr>
                                <td>{{ $anc->anamnesa }}</td>
                                <td>{{ $anc->TB }}</td>
                                <td>{{ $anc->LILA }}</td>
                                <td>{{ $anc->BB }}</td>
                                <td>{{ $anc->TBJ }}</td>
                                <td>{{ $anc->TFU }}</td>
                                <td>{{ $anc->tensi }}</td>
                                <td>{{ $anc->status_TT1_K1 }}</td>
                                <td>{{ $anc->FE }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 page">
                    <h5>Halaman 4</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>BAT Lain</th>
                                <th>Presentasi</th>
                                <th>DJJ</th>
                                <th>Kepala THD PAP</th>
                                <th>TBJ</th>
                                <th>HB</th>
                                <th>Protein Urine</th>
                                <th>Golongan Darah</th>
                                <th>HBsAG</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ancs as $key => $anc)
                            <tr>
                                <td>{{ $anc->BAT_LAIN }}</td>
                                <td>{{ $anc->PRESENTASI }}</td>
                                <td>{{ $anc->DJJ }}</td>
                                <td>{{ $anc->KEPALA_THD_PAP }}</td>
                                <td>{{ $anc->TBJ }}</td>
                                <td>{{ $anc->HB }}</td>
                                <td>{{ $anc->Protein_urine }}</td>
                                <td>{{ $anc->GOLDAR }}</td>
                                <td>{{ $anc->HBSAG }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 page">
                    <h5>Halaman 5</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>IMS</th>
                                <th>HIV</th>
                                <th>Komplikasi</th>
                                <th>Rujuk Ke</th>
                                <th>Trimester 1</th>
                                <th>Trimester 2</th>
                                <th>Trimester 3</th>
                                <th>FR/R</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ancs as $key => $anc)
                            <tr>
                                <td>{{ $anc->IMS }}</td>
                                <td>{{ $anc->HIV }}</td>
                                <td>{{ $anc->KOMPLIKASI }}</td>
                                <td>{{ $anc->RUJUK }}</td>
                                <td>{{ $anc->trisemester1 }}</td>
                                <td>{{ $anc->trisemester2 }}</td>
                                <td>{{ $anc->trisemester3 }}</td>
                                <td>{{ $anc->FR }}</td>
                                <td>{{ $anc->keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <p>No data available.</p>
        @endif
    </div>
</div>
@endsection
