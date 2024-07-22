@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="container min-vh-100 p-0 m-0 min-vw-100">
        {{-- nvbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark p-2 d-md-none m-0 min-vw-100 bg-dark" style="width: 47vh">
            <a href="/dashboard-user" class="text-white fw-bold fs-5 text-decoration-none">Dashboard</a>
            <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/pasien" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/lihat-reservasi-user" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Cek Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/riwayat" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Riwayat
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
        {{-- end navbar --}}
        <div class="d-flex">
            {{-- dashboard --}}
            <div class="sidebar p-3 flex-shrink-0 d-none d-md-block bg-dark m-0 vh-100">
                <a href="/dashboard-user" class="text-white fw-bold fs-5 text-decoration-none">Dashboard</a>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/pasien" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/lihat-reservasi-user" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Cek Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/riwayat" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Riwayat
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
            {{-- end dashboard --}}
            {{-- isi konten nya disini --}}
            <div class="content flex-grow-1 p-2 col-7">
                {{-- bagian kb dan search --}}
                <div class="row col-md-12 ms-0">
                    {{-- alert --}}
                    <div class=" col-md-7 mt-2 col-6">
                        <h1 class=" fw-bold">Data Imunisasi</h1>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (session('errors'))
                            <div class="alert alert-danger">
                                {{ session('errors') }}
                            </div>
                        @endif
                    </div>
                    {{-- end alert --}}
                    {{-- search --}}
                    
                    {{-- end search --}}
                    {{-- tambah --}}
                    {{-- <div class="col-md-2 col-2">
                        <a href="/input-kb">
                            <button type="button" class="btn btn-success btn-sm">tambah</button>
                        </a>
                    </div> --}}
                    {{-- end tambah --}}
                </div>
                {{-- end --}}
                {{-- bagian data --}}
                <div class="row col-md-12 col-12 ms-0 mt-2">
                    {{-- Atas --}}
                    <div class="row p-0 ms-1">
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Tanggal</div>
                            <div class="col-8 col-md-8">: {{ $imunisasi->tanggal }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Nama Anak</div>
                            <div class="col-8 col-md-8">: {{ $imunisasi->Anak->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">NIK</div>
                            <div class="col-8 col-md-8">: {{ $imunisasi->Anak->nik }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Nama Orang Tua</div>
                            <div class="col-8 col-md-8">: {{ $imunisasi->Ortu->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Tanggal Lahir</div>
                            <div class="col-8 col-md-8">: {{ $imunisasi->Anak->ttl }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Alamat</div>
                            <div class="col-8 col-md-8">: {{ $imunisasi->Ortu->alamat }}</div>
                        </div>
                        {{-- nama datanya --}}
                    </div>
                    {{-- end atas --}}
                    {{-- bawah --}}
                    <div class="col-md-12 ms-0">
                        <div class="overflow-x-scroll">
                            <table class="table border-black border-2 table-bordered table-responsive table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>HBO</th>
                                        <th>BCG</th>
                                        <th>Kipi</th>
                                        <th>Vaksin</th>
                                        <th>Penta</th>
                                        <th>IPV</th>
                                        <th>PCV</th>
                                        <th>Rota Virus</th>
                                        <th>MK</th>
                                        <th>Booster</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $imunisasi->berat_badan }}</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- end bawah --}}
                    {{-- <div class=" mb-3 mt-3 col-md-6">
                        <div class="row">
                            <div class="col-md-2 col-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahModal">Ubah</button>
                                </form>
                            </div>
                            <div class="col-md-2 col-3">
                                <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    {{-- end konten --}}
                    <!-- Modal ubah-->
                    <div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('imunisasi.update', $imunisasi->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            {{-- kiri --}}
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputTanggal" class="form-label">Tanggal</label>
                                                    <input type="text" class="form-control" name="tanggal"
                                                        id="inputTanggal" value="{{ $imunisasi->tanggal }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputNamaAnak" class="form-label">Nama Anak</label>
                                                    <input type="text" class="form-control" name="nama_anak"
                                                        id="inputNamaAnak" value="{{ $imunisasi->Anak->name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputNIK" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nik_anak"
                                                        id="inputNIK" value="{{ $imunisasi->Anak->nik }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
                                                    <input type="text" class="form-control" name="nama_orangtua"
                                                        id="inputNamaOrtu" value="{{ $imunisasi->Ortu->name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="tgl_lahir"
                                                        id="inputTglLahir" value="{{ $imunisasi->Anak->ttl }}">
                                                </div>
                                            </div>
                                            {{-- tengah --}}
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputAlamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        id="inputAlamat" value="{{ $imunisasi->Ortu->alamat }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                                    <input type="number" class="form-control" name="berat_badan"
                                                        id="inputBeratBadan" value="{{ $imunisasi->berat_badan }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="inputPanjangBadan" class="form-label">Panjang
                                                        Badan</label>
                                                    <input type="number" class="form-control" name="panjang_badan"
                                                        id="inputPanjangBadan" value="{{ $imunisasi->panjang_badan }}">
                                                </div>
                                                <div class="mb-4 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputPanjangBadan" class="form-label">KIPI</label>
                                                    <input type="text" class="form-control" id="inputPanjangBadan"
                                                        aria-describedby="" name="kipi"
                                                        value="{{ $imunisasi->kipi }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-4 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputPanjangBadan" class="form-label">Vaksin</label>
                                                    <input type="text" class="form-control" id="inputPanjangBadan"
                                                        aria-describedby=""name="vaksin"
                                                        value="{{ $imunisasi->vaksin }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputBCG" class="form-label">HBO</label>
                                                    <div>
                                                        <input type="text" class="form-check-input" name="HBO"
                                                            id="inputBCG" value="0" hidden>
                                                        <input type="checkbox" class="form-check-input" name="HBO"
                                                            id="inputBCG"
                                                            value="1"{{ $imunisasi->HBO == '1' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">1</label>

                                                    </div>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputBCG" class="form-label">BCG</label>
                                                    <div>
                                                        <input type="text" class="form-check-input" name="BCG"
                                                            id="inputBCG" value="0" hidden>
                                                        <input type="checkbox" class="form-check-input" name="BCG"
                                                            id="inputBCG"
                                                            value="1"{{ $imunisasi->BCG == '1' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">1</label>

                                                    </div>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputPenta" class="form-label">Penta</label>
                                                    <div>
                                                        <input type="text" class="form-check-input" name="PENTA"
                                                            id="inputBCG" value="0" hidden>
                                                        <input type="checkbox" class="form-check-input" name="PENTA"
                                                            id="inputBCG"
                                                            value="1"{{ $imunisasi->PENTA == '1' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">1</label>
                                                        <input type="checkbox" class="form-check-input" name="PENTA"
                                                            id="inputBCG"
                                                            value="2"{{ $imunisasi->PENTA == '2' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">2</label>
                                                        <input type="checkbox" class="form-check-input" name="PENTA"
                                                            id="inputBCG"
                                                            value="3"{{ $imunisasi->PENTA == '3' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">3</label>
                                                    </div>
                                                </div>

                                            </div>
                                            {{-- kanan --}}
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputTPV" class="form-label">IPV</label>
                                                    <div>
                                                        <input type="text" class="form-check-input" name="IPV"
                                                            id="inputBCG" value="0" hidden>
                                                        <input type="checkbox" class="form-check-input" name="IPV"
                                                            id="inputBCG"
                                                            value="1"{{ $imunisasi->IPV == '1' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">1</label>
                                                        <input type="checkbox" class="form-check-input" name="IPV"
                                                            id="inputBCG"
                                                            value="2"{{ $imunisasi->IPV == '2' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">2</label>
                                                        <input type="checkbox" class="form-check-input" name="IPV"
                                                            id="inputBCG"
                                                            value="3"{{ $imunisasi->IPV == '3' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">3</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputPCV" class="form-label">PCV</label>
                                                    <div>
                                                        <input type="text" class="form-check-input" name="PCV"
                                                            id="inputBCG" value="0" hidden>
                                                        <input type="checkbox" class="form-check-input" name="PCV"
                                                            id="inputBCG"
                                                            value="1"{{ $imunisasi->PCV == '1' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">1</label>
                                                        <input type="checkbox" class="form-check-input" name="PCV"
                                                            id="inputBCG"
                                                            value="2"{{ $imunisasi->PCV == '2' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">2</label>
                                                        <input type="checkbox" class="form-check-input" name="PCV"
                                                            id="inputBCG"
                                                            value="3"{{ $imunisasi->PCV == '3' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">3</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputBCG" class="form-label">Rota Virus</label>
                                                    <div>
                                                        <input type="text" class="form-check-input" name="ROTA_VIRUS"
                                                            id="inputBCG" value="0" hidden>
                                                        <input type="checkbox" class="form-check-input" name="ROTA_VIRUS"
                                                            id="inputBCG"
                                                            value="1"{{ $imunisasi->ROTA_VIRUS == '1' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">1</label>
                                                        <input type="checkbox" class="form-check-input" name="ROTA_VIRUS"
                                                            id="inputBCG"
                                                            value="2"{{ $imunisasi->ROTA_VIRUS == '2' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">2</label>
                                                        <input type="checkbox" class="form-check-input" name="ROTA_VIRUS"
                                                            id="inputBCG"
                                                            value="3"{{ $imunisasi->ROTA_VIRUS == '3' ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">3</label>
                                                    </div>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputTPV" class="form-label">MK</label>
                                                    <input type="text" class="form-check-input" name="MK"
                                                        id="inputBCG" value="0" hidden>
                                                    <input type="checkbox" class="form-check-input" name="MK"
                                                        id="inputTPV"
                                                        value="1"{{ $imunisasi->MK == '1' ? 'checked' : '' }}>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="inputTPV" class="form-label">Booster</label>
                                                    <div>
                                                        <input type="text" class="form-check-input" name="booster"
                                                            id="inputBCG" value="0" hidden>
                                                        <input type="checkbox" class="form-check-input" name="booster"
                                                            id="inputTPV"
                                                            value="PENTA"{{ $imunisasi->booster == 'PENTA' ? 'checked' : '' }}>
                                                        <label for="inputTPV" class="form-label">Penta</label>
                                                        <input type="checkbox" class="form-check-input" name="booster"
                                                            id="inputTPV"
                                                            value="MK"{{ $imunisasi->booster == 'MK' ? 'checked' : '' }}>
                                                        <label for="inputTPV" class="form-label">MK</label>
                                                        <input type="text" name='id_ortu' hidden
                                                            value="{{ $imunisasi->Ortu->id }}">
                                                        <input type="text" name='id_anak' hidden
                                                            value="{{ $imunisasi->Anak->id }}">
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-success"
                                                        data-bs-dismiss="modal">Simpan</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                    <!-- Isi detail data disini -->


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal ubah --}}
                </div>
            </div>
            {{-- end --}}
