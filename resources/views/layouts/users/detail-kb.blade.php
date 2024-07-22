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
                        <h1 class=" fw-bold">Data KB</h1>
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
                            <div class="col-8 col-md-8">: {{ $kb->tgl_kb }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Nama Istri</div>
                            <div class="col-8 col-md-8">: {{ $kb->Ibu->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">NIK Ibu</div>
                            <div class="col-8 col-md-8">: {{ $kb->Ibu->nik }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Nama Suami</div>
                            <div class="col-8 col-md-8">: {{ $kb->Suami->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">NIK Suami</div>
                            <div class="col-8 col-md-8">: {{ $kb->Suami->nik }}</div>
                        </div>
                        {{-- nama datanya --}}
                    </div>
                    {{-- end atas --}}
                    {{-- bawah --}}
                    <div class="col-md-12 ms-0">
                        <div class="overflow-x-scroll">
                            <table id="tabel-data"
                                class="table table-responsive table-sm border-black border-2 table-bordered">
                                <thead class="table-dark">
                                    <tr class=" bg-secondary">
                                        <th>Jumlah Anak</th>
                                        <th>Umur Anak Terkecil</th>
                                        <th>Jaminan</th>
                                        <th>Alki</th>
                                        <th>Pasca Plasenta</th>
                                        <th>Pasca Salin</th>
                                        <th>Do</th>
                                        <th>Gc</th>
                                        <th>Metode KB</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Tensi</th>
                                        <th>Lila</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Inform Consent</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $kb->jmlh_anak }}</td>
                                        <td>{{ $kb->umur_anak_terkecil }}</td>
                                        <td>{{ $kb->jaminan }}</td>
                                        <td>{{ $kb->alki }}</td>
                                        <td>{{ $kb->pasca_plasenta }}</td>
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
                                        <td>{{ $kb->keterangan }}</td>
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
                                <form action="{{ route('kb.destroy', $kb->id) }}" method="POST">
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
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('kb.update', $kb->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            {{-- kiri --}}
                                            <div class="col-md-3">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="tanggal-kb" class="form-label">Tanggal KB</label>
                                                    <input type="date" class="form-control" id="tangal-kb"
                                                        aria-describedby="" name="tgl_kb" value="{{ $kb->tgl_kb }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark"
                                                    id="nikform">
                                                    <label for="nikIbu" class="form-label">NIK Ibu</label>
                                                    <input type="text" class="form-control" id="nikIbu"
                                                        aria-describedby="" value="{{ $kb->Ibu->nik }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark"
                                                    id="result">
                                                    <label for="namaIbu" class="form-label">Nama Ibu</label>
                                                    <input type="text" class="form-control" id="namaIbu"
                                                        aria-describedby="" value="{{ $kb->Ibu->name }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark"
                                                    id="result">
                                                    <label for="namaSuami" class="form-label">Nama Suami</label>
                                                    <input type="text" class="form-control" id="namaSuami"
                                                        aria-describedby="" value="{{ $kb->Suami->name }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                                <div class="mb-3 form-outline border-0 border-bottom border-dark"
                                                    id="result">
                                                    <label for="umurIbu" class="form-label">NIK Suami</label>
                                                    <input type="number" class="form-control" id="umurIbu"
                                                        aria-describedby="" value="{{ $kb->Suami->nik }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="jumlah-anak" class="form-label">Jumlah Anak</label>
                                                    <input type="number" class="form-control" id="jumlah-anak"
                                                        aria-describedby="" name="jmlh_anak"
                                                        value="{{ $kb->jmlh_anak }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                            </div>
                                            {{-- tengah --}}
                                            <div class="col-md-3">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="umur-anak-terkecil" class="form-label">Umur Anak
                                                        Terkecil</label>
                                                    <input type="number" class="form-control" id="umur-anak-terkecil"
                                                        aria-describedby="" name="umur_anak_terkecil"
                                                        value="{{ $kb->umur_anak_terkecil }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else./div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="jaminan" class="form-label">Jaminan</label>
                                                    <input type="text" class="form-control" id="jaminan"
                                                        aria-describedby="" name="jaminan" value="{{ $kb->jaminan }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="alki" class="form-label">Alki</label>
                                                    <input type="text" class="form-control" id="alki"
                                                        aria-describedby="" name="alki" value="{{ $kb->alki }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="pasca-plasenta" class="form-label">Pasca Plasenta</label>
                                                    <input type="text" class="form-control" id="pasca-plasenta"
                                                        aria-describedby="" name="pasca_plasenta"
                                                        value="{{ $kb->pasca_plasenta }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="pasca-salin" class="form-label">Pasca Salin</label>
                                                    <input type="text" class="form-control" id="pasca-salin"
                                                        aria-describedby="" name="pasca_salin"
                                                        value="{{ $kb->pasca_salin }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="do" class="form-label">DO</label>
                                                    <input type="text" class="form-control" id="do"
                                                        aria-describedby="" name="do" value="{{ $kb->do }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="gc-dari" class="form-label">gc dari</label>
                                                    <input type="text" class="form-control" id="gc-dari"
                                                        aria-describedby="" name="gc_dari" value="{{ $kb->gc_dari }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                                <div class="mb-4">
                                                    <label for="metode-kb" class="form-label">metode kb</label>
                                                    <div>
                                                        <input type="checkbox" class="form-check-input" id="metode-kb"
                                                            name="metode_kb" value="IUD"
                                                            {{ $kb->metode_kb == 'IUD' ? 'checked' : '' }}>
                                                        <label for="metode-kb" class="form-label">IUD</label>
                                                        <input type="checkbox" class="form-check-input" id="metode-kb"
                                                            name="metode_kb" value="STK"
                                                            {{ $kb->metode_kb == 'STK' ? 'checked' : '' }}>
                                                        <label for="metode-kb" class="form-label">STK</label>
                                                        <input type="checkbox" class="form-check-input" id="metode-kb"
                                                            name="metode_kb" value="PIL"
                                                            {{ $kb->metode_kb == 'PIL' ? 'checked' : '' }}>
                                                        <label for="metode-kb" class="form-label">PIL</label>
                                                        <input type="checkbox" class="form-check-input" id="metode-kb"
                                                            name="metode_kb" value="CO"
                                                            {{ $kb->metode_kb == 'CO' ? 'checked' : '' }}>
                                                        <label for="metode-kb" class="form-label">CO</label>
                                                        <input type="hidden" name="PENTA" value="0">
                                                    </div>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="beratBadan" class="form-label">Berat Badan</label>
                                                    <input type="number" class="form-control" id="beratBadan"
                                                        aria-describedby="" name="berat_badan"
                                                        value="{{ $kb->berat_badan }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="tinggiBadan" class="form-label">tinggi Badan</label>
                                                    <input type="number" class="form-control" id="tinggiBadan"
                                                        aria-describedby="" name="tinggi_badan"
                                                        value="{{ $kb->tinggi_badan }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="tensi" class="form-label">Tensi</label>
                                                    <input type="number" class="form-control" id="tensi"
                                                        aria-describedby="" name="tensi" value="{{ $kb->tensi }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="lila" class="form-label">Lila</label>
                                                    <input type="number" class="form-control" id="lila"
                                                        aria-describedby="" name="lila" value="{{ $kb->lila }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                            </div>
                                            {{-- kanan --}}
                                            <div class="col-md-3">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="tanggal-kembali" class="form-label">Tanggal
                                                        Kembali</label>
                                                    <input type="date" class="form-control" id="tanggal-kembali"
                                                        aria-describedby="" name="tgl_kembali"
                                                        value="{{ $kb->tgl_kembali }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="kegagalan" class="form-label">Kegagalan</label>
                                                    <input type="text" class="form-control" id="kegagalan"
                                                        aria-describedby="" name="kegagalan"
                                                        value="{{ $kb->kegagalan }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inform-consent" class="form-label">Inform Consent</label>
                                                    <input type="text" class="form-control" id="inform-consent"
                                                        aria-describedby="" name="inform_consent"
                                                        value="{{ $kb->inform_consent }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="keterangan" class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" id="keterangan"
                                                        aria-describedby="" name="keterangan"
                                                        value="{{ $kb->keterangan }}">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <input type="text" class="form-control" id="keterangan"
                                                    aria-describedby="" name="id_suami" value="{{ $kb->id_suami }}"
                                                    hidden>
                                                <input type="text" class="form-control" id="keterangan"
                                                    aria-describedby="" name="id_ibu" value="{{ $kb->id_ibu }}"
                                                    hidden>
                                                <div>
                                                    <button type="submit" class="btn btn-success"
                                                        data-bs-dismiss="modal">Simpan</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal ubah --}}
                </div>
            </div>
            {{-- end --}}
