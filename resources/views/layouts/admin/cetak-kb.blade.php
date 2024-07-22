@extends('layouts.bootstrap')
@section('content')
    <style>
        @media print {
            .page {
                page-break-after: always;
            }
        }
    </style>

    <div class="d-flex">

        {{-- isi konten nya disini --}}
        <div class="content flex-grow-1 p-2" style="width: 47vh">
            <div class="row">
                <div class="col-12 page">
                    <h5>Halaman 1</h5>
                    <table class="table table-responsive table-sm table-bordered table-striped border-black">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>Tanggal</th>
                                <th>Nama Istri</th>
                                <th>NIK Istri</th>
                                <th>Nama Suami</th>
                                <th>NIK Suami</th>
                                <th>Jumlah Anak</th>
                                <th>Jumlah Anak Terkecil</th>
                                <th>Jaminan</th>
                                <th>Alki</th>
                                <th>Pasca Plasenta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kbs as $key => $kb)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $kb->tgl_kb }}</td>
                                    <td>{{ $kb->Ibu->name }}</td>
                                    <td>{{ $kb->Ibu->nik }}</td>
                                    <td>{{ $kb->Suami->name }}</td>
                                    <td>{{ $kb->Suami->nik }}</td>
                                    <td>{{ $kb->jmlh_anak }}</td>
                                    <td>{{ $kb->umur_anak_terkecil }}</td>
                                    <td>{{ $kb->jaminan }}</td>
                                    <td>{{ $kb->alki }}</td>
                                    <td>{{ $kb->pasca_plasenta }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="col-12 page">
                    <h5>Halaman 2</h5>
                    <table class="table table-responsive table-sm table-bordered table-striped border-black">
                        <thead>

                            <tr>
                                <th>no Salin</th>
                                <th>Pasca Salin</th>
                                <th>DO</th>
                                <th>GC Dari</th>
                                <th>Metode KB</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Tensi</th>
                                <th>Lila</th>
                                <th>Tanggal Kembali</th>
                                <th>Kegagalan</th>
                                <th>Inform Consent</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kbs as $key => $kb)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $kb->pasca_salin }}</td>
                                    <td>{{ $kb->do }}</td>
                                    <td>{{ $kb->gc_dari }}</td>
                                    <td>{{ $kb->metode_kb }}</td>
                                    <td>{{ $kb->berat_badan }}</td>
                                    <td>{{ $kb->tinggi_badan }}</td>
                                    <td>{{ $kb->tensi }}</td>
                                    <td>{{ $kb->lila }}</td>
                                    <td>{{ $kb->tgl_kembali }}</td>
                                    <td>{{ $kb->inform_consent }}</td>
                                    <td>{{ $kb->keterangan}}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            {{-- bagian tabel --}}

        </div>
        {{-- end konten --}}
    </div>
