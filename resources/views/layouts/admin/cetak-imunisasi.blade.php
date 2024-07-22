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
                            @foreach ($imunisasis as $key => $imunisasi)
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama Anak</th>
                                    <th>NIK</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Tanggal Lahir</th>
                                    <th>ALamat</th>
                                    <th>Berat Badan</th>
                                </tr>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $imunisasi->tanggal }}</td>
                                <td>{{ $imunisasi->Anak->name }}</td>
                                <td>{{ $imunisasi->Anak->nik }}</td>
                                <td>{{ $imunisasi->Ortu->name }}</td>
                                <td>{{ $imunisasi->Anak->ttl }}</td>
                                <td>{{ $imunisasi->Ortu->alamat }}</td>
                                <td>{{ $imunisasi->berat_badan }}</td>
                            
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
                                <th>Panjang Badan</th>
                                <th>HBO</th>
                                <th>BCG</th>
                                <th>Kipi</th>
                                <th>Vaksin</th>
                                <th>Penta</th>
                                <th>TPV</th>
                                <th>PCV</th>
                                <th>Rota Virus</th>
                                <th>MK</th>
                                <th>Booster</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imunisasis as $key => $imunisasi)
                                <tr>
                                    <td>{{ $imunisasi->panjang_badan }}</td>
                                    <td>{{ $imunisasi->HBO }}</td>
                                    <td>{{ $imunisasi->BCG }}</td>
                                    <td>{{ $imunisasi->kipi }}</td>
                                    <td>{{ $imunisasi->vaksin }}</td>
                                    <td>{{ $imunisasi->PENTA }}</td>
                                    <td>{{ $imunisasi->IPV }}</td>
                                    <td>{{ $imunisasi->PCV }}</td>
                                    <td>{{ $imunisasi->ROTA_VIRUS }}</td>
                                    <td>{{ $imunisasi->MK }}</td>
                                    <td>{{ $imunisasi->booster }}</td>
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
