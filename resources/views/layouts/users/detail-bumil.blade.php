@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="container min-vh-100 p-0 m-0 min-vw-100">
        {{-- nvbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark p-2 d-md-none m-0 min-vw-100 bg-dark" style="width: 47vh">
            <a class="navbar-brand" href="#">Dashboard</a>
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
                        <h1 class=" fw-bold">Detail Ibu Hamil</h1>
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
                        <div class=" col-md-5">
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Tanggal Pemeriksaan</div>
                                <div class="col-8 col-md-7">: {{ $ancs->tgl_pemeriksaan }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Buku KIA</div>
                                <div class="col-8 col-md-7">: {{ $ancs->buku_kia == '1' ? 'Ada' : 'Tidak Ada' }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Nama Ibu</div>
                                <div class="col-8 col-md-7">: {{ $ancs->Istri->name }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">NIK Ibu</div>
                                <div class="col-8 col-md-7">: {{ $ancs->Istri->nik }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Tanggal Lahir Ibu</div>
                                <div class="col-8 col-md-7">: {{ $ancs->Istri->ttl }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Pendidikan Ibu</div>
                                <div class="col-8 col-md-7">: {{ $ancs->pddk_ibu }}</div>
                            </div>
                        </div>
                        <div class=" col-md-5">

                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Pekerjaan Ibu</div>
                                <div class="col-8 col-md-7">: {{ $ancs->pekerjaan_ibu }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Nama Suami</div>
                                <div class="col-8 col-md-7">: {{ $ancs->Suami->name }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">NIK Suami</div>
                                <div class="col-8 col-md-7">: {{ $ancs->Suami->nik }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Pekerjaan Suami</div>
                                <div class="col-8 col-md-7">: {{ $ancs->pekerjaan_suami }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">NO KK</div>
                                <div class="col-8 col-md-7">: {{ $ancs->no_kk }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-md-5 font-weight-bold">Alamat</div>
                                <div class="col-8 col-md-7">: {{ $ancs->Suami->alamat }}</div>
                            </div>
                        </div>


                        {{-- nama datanya --}}
                    </div>
                    {{-- end atas --}}
                    {{-- bawah --}}
                    {{-- Card Halaman --}}
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1"
                                        role="tab" aria-controls="page1" aria-selected="true">Halaman 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab"
                                        aria-controls="page2" aria-selected="true">Halaman 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3" role="tab"
                                        aria-controls="page3" aria-selected="true">Halaman 3</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <!-- Halaman 1 -->
                                <div class="tab-pane fade show active" id="page1" role="tabpanel"
                                    aria-labelledby="page1-tab">
                                    <div class="col-md-12 ms-0">
                                        <div class="overflow-x-scroll">
                                            <table id="tabel-data"
                                                class="table table-responsive table-sm border-black border-2 table-bordered">
                                                <thead class="table-dark">
                                                    <tr class=" bg-secondary">
                                                        <th>Paritas</th>
                                                        <th>Spasing</th>
                                                        <th>P4K/Rencana Kelahiran</th>
                                                        <th>HPHT</th>
                                                        <th>HPL</th>
                                                        <th>Umur Kehamilan (Minggu)</th>
                                                        <th>Anamesa Kehamilan</th>
                                                        <th>Tinggi Badan</th>
                                                        <th>LILA</th>
                                                        <th>Berat Badan</th>
                                                        <th>TFU</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $ancs->paritas }}</td>
                                                        <td>{{ $ancs->parsing }}</td>
                                                        <td>{{ $ancs->p4k }}</td>
                                                        <td>{{ $ancs->HPPT }}</td>
                                                        <td>{{ $ancs->HPL }}</td>
                                                        <td>{{ $ancs->umur_kehamilan }}</td>
                                                        <td>{{ $ancs->anamnesa }}</td>
                                                        <td>{{ $ancs->TB }}</td>
                                                        <td>{{ $ancs->LILA }}</td>
                                                        <td>{{ $ancs->BB }}</td>
                                                        <td>{{ $ancs->TFU }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Halaman 2 -->
                                <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                                    <div class="col-md-12 ms-0">
                                        <div class="overflow-x-scroll">
                                            <table id="tabel-data"
                                                class="table table-responsive table-sm border-black border-2 table-bordered">
                                                <thead class="table-dark">
                                                    <tr class=" bg-secondary">
                                                        <th>Tensi</th>
                                                        <th>Status TT K1</th>
                                                        <th>TM/K1/K4</th>
                                                        <th>FE1/FE2/FE3</th>
                                                        <th>BAT Lain</th>
                                                        <th>Presentasi</th>
                                                        <th>DJJ</th>
                                                        <th>Kepala THD PAP</th>
                                                        <th>TBJ</th>
                                                        <th>HB</th>
                                                        <th>Protein Urine</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $ancs->tensi }}</td>
                                                        <td>{{ $ancs->status_TT1_K1 }}</td>
                                                        <td>{{ $ancs->TM }}</td>
                                                        <td>{{ $ancs->FE }}</td>
                                                        <td>{{ $ancs->BAT_LAIN }}</td>
                                                        <td>{{ $ancs->PRESENTASI }}</td>
                                                        <td>{{ $ancs->DJJ }}</td>
                                                        <td>{{ $ancs->KEPALA_THD_PAP }}</td>
                                                        <td>{{ $ancs->TBJ }}</td>
                                                        <td>{{ $ancs->HB }}</td>
                                                        <td>{{ $ancs->Protein_urine }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Halaman 3 -->
                                <div class="tab-pane fade" id="page3" role="tabpanel" aria-labelledby="page3-tab">
                                    <div class="col-md-12 ms-0">
                                        <div class="overflow-x-scroll">
                                            <table id="tabel-data"
                                                class="table table-responsive table-sm border-black border-2 table-bordered">

                                                <thead class="thead-dark table-dark">
                                                    <tr>
                                                        <th rowspan="2">Golongan Darah</th>
                                                        <th rowspan="2">HBsAG</th>
                                                        <th rowspan="2">IMS</th>
                                                        <th rowspan="2">HIV</th>
                                                        <th colspan="6" class="text-center">Komplikasi</th>
                                                        <th rowspan="2">Rujuk Ke</th>
                                                        <th rowspan="2">Trimester 1</th>
                                                        <th rowspan="2">Trimester 2</th>
                                                        <th rowspan="2">Trimester 3</th>
                                                        <th rowspan="2">FR/R</th>
                                                        <th rowspan="2">Keterangan</th>

                                                    </tr>
                                                    <tr>
                                                        <th>HDK</th>
                                                        <th>Abortus</th>
                                                        <th>Perdarahan</th>
                                                        <th>Infeksi</th>
                                                        <th>KPD</th>
                                                        <th>Lain-lain</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $ancs->GOLDAR }}</td>
                                                        <td>{{ $ancs->HBSAG }}</td>
                                                        <td>{{ $ancs->IMS }}</td>
                                                        <td>{{ $ancs->HIV }}</td>
                                                        <td>{{ $ancs->HDK }}</td>
                                                        <td>{{ $ancs->ABORTUS }}</td>
                                                        <td>{{ $ancs->PERDARAHAN }}</td>
                                                        <td>{{ $ancs->INFEKSI }}</td>
                                                        <td>{{ $ancs->KPD }}</td>
                                                        <td>{{ $ancs->LAIN_LAIN }}</td>
                                                        <td>{{ $ancs->RUJUK }}</td>
                                                        <td>{{ $ancs->trisemester1 }}</td>
                                                        <td>{{ $ancs->trisemester2 }}</td>
                                                        <td>{{ $ancs->trisemester3 }}</td>
                                                        <td>{{ $ancs->FR }}</td>
                                                        <td>{{ $ancs->keterangan }}</td>

                                                    </tr>

                                                    <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                                                </tbody>
                                                {{-- <thead class="table-dark">
                                                    <tr class=" bg-secondary">
                                                        <th>Golongan Darah</th>
                                                        <th>HBsAG</th>
                                                        <th>IMS</th>
                                                        <th>HIV</th>
                                                        <th class=" text-center">Komplikasi
                                                            <table class="text-white table border-black border-2">
                                                                <thead class="table-dark">
                                                                    <tr>
                                                                        <th>HDK| </th>
                                                                        <th>Abortus| </th>
                                                                        <th>Perdarahan| </th>
                                                                        <th>Infeksi| </th>
                                                                        <th>KPD|</th>
                                                                        <th>Lain_lain</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                            <table
                                                                class="table border-black border-2 table-bordered position-fixed mt-1 d"
                                                                style="width:  19vh">
                                                                <thead class="table-dark d-block">
                                                                    <tr>
                                                                        <th>HDK| </th>
                                                                        <th>Abortus| </th>
                                                                        <th>Perdarahan| </th>
                                                                        <th>Infeksi| </th>
                                                                        <th>KPD|</th>
                                                                        <th>Lain_lain</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>{{ $ancs->HDK }}</td>
                                                                        <td>{{ $ancs->ABORTUS }}</td>
                                                                        <td>{{ $ancs->PERDARAHAN }}</td>
                                                                        <td>{{ $ancs->INFEKSI }}</td>
                                                                        <td>{{ $ancs->KPD }}</td>
                                                                        <td>{{ $ancs->LAIN_LAIN }}</td>
                                                                        {{-- </div> --}}

                                                {{-- </tr>
                                                                </tbody>
                                                            </table>
                                                        </th>
                                                        <th>Rujuk Ke</th>
                                                        <th>Trimester 1</th>
                                                        <th>Trimester 2</th>
                                                        <th>Trimester 3</th>
                                                        <th>FR/R</th>
                                                        <th>Keterangan</th>
                                                    </tr> --}}
                                                {{-- </thead> --}}

                                                {{-- <tr>
                                                    <td>{{ $ancs->GOLDAR }}</td>
                                                    <td>{{ $ancs->HBSAG }}</td>
                                                    <td>{{ $ancs->IMS }}</td>
                                                    <td>{{ $ancs->HIV }}</td>
                                                    <td>
                                                        <table
                                                            class="table border-black border-2 table-bordered position-absolute mt-0"
                                                            style="width:  19vh">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th>HDK| </th>
                                                                    <th>Abortus| </th>
                                                                    <th>Perdarahan| </th>
                                                                    <th>Infeksi| </th>
                                                                    <th>KPD|</th>
                                                                    <th>Lain_lain</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    <td>{{ $ancs->HDK }}</td>
                                                                    <td>{{ $ancs->ABORTUS }}</td>
                                                                    <td>{{ $ancs->PERDARAHAN }}</td>
                                                                    <td>{{ $ancs->INFEKSI }}</td>
                                                                    <td>{{ $ancs->KPD }}</td>
                                                                    <td>{{ $ancs->LAIN_LAIN }}</td>
                                                                    {{-- </div> --}}

                                                {{-- </tr>
                                                            </tbody>
                                                        </table>






                                                    </td>
                                                    <td>{{ $ancs->RUJUK }}</td>
                                                    <td>{{ $ancs->trisemester1 }}</td>
                                                    <td>{{ $ancs->trisemester2 }}</td>
                                                    <td>{{ $ancs->trisemester3 }}</td>
                                                    <td>{{ $ancs->FR }}</td>
                                                    <td>{{ $ancs->keterangan }}</td>
                                                </tr>
                                                </tbody> --}}




                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- end bawah --}}
                    {{-- <div class=" mb-3 mt-3 col-md-6">
                        <div class="row">
                            <div class="col-md-2 col-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahModal">Ubah</button>

                            </div>
                            <div class="col-md-2 col-3">
                                <form action="{{ route('bumil.delete', $ancs->id) }}" method="POST">
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
                                    {{-- tampilan --}}
                                    <div class="container ms-0">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <ul class="nav nav-tabs card-header-tabs" id="myTab"
                                                            role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="halaman1-tab"
                                                                    data-toggle="tab" href="#halaman1" role="tab"
                                                                    aria-controls="halaman1" aria-selected="true">Halaman
                                                                    1</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="halaman2-tab" data-toggle="tab"
                                                                    href="#halaman2" role="tab"
                                                                    aria-controls="halaman2" aria-selected="true">Halaman
                                                                    2</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="halaman3-tab" data-toggle="tab"
                                                                    href="#halaman3" role="tab"
                                                                    aria-controls="halaman3" aria-selected="true">Halaman
                                                                    3</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="{{ route('bumil.update', $ancs->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="tab-content" id="myTabContent">
                                                                <!-- Halaman 1 -->
                                                                <div class="tab-pane fade show active" id="halaman1"
                                                                    role="tabpanel" aria-labelledby="halaman1-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <form class="" method="POST"
                                                                                action="/input-bumil">
                                                                                @csrf
                                                                                <div
                                                                                    class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                    <label for="inputTanggalPemeriksaan"
                                                                                        class="form-label">Tanggal
                                                                                        Pemeriksaan</label>
                                                                                    <input type="date"
                                                                                        class="form-control"
                                                                                        id="inputTanggalPemeriksaan"
                                                                                        name="tgl_pemeriksaan"
                                                                                        value="{{ $ancs->tgl_pemeriksaan }}">
                                                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label for="inputREG"
                                                                                        class="form-label">REG</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="inputNamaIbu"
                                                                                        aria-describedby=""
                                                                                        value="{{ $ancs->REG }}"
                                                                                        name="REG" checked>
                                                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                                </div>
                                                                                <div class="mb-1">
                                                                                    <label for="inputBukuKIA"
                                                                                        class="form-label">Buku KIA</label>
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="inputBukuKIA" name="buku_kia"
                                                                                        value='1'
                                                                                        {{ $ancs->buku_kia ? 'checked' : '' }}>
                                                                                    <input type="hidden" name="buku_kia"
                                                                                        value="0">
                                                                                </div>
                                                                                <div
                                                                                    class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                    <label for="inputNamaIbu"
                                                                                        class="form-label">Nama Ibu</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="inputNamaIbu"
                                                                                        aria-describedby=""
                                                                                        value="{{ $ancs->nama_ibu }}"
                                                                                        name="nama_ibu">
                                                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                                </div>
                                                                                <div
                                                                                    class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                    <label for="inputNamaSuami"
                                                                                        class="form-label">Nama
                                                                                        Suami</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="inputNamaSuami"
                                                                                        aria-describedby=""
                                                                                        value="{{ $ancs->nama_suami }}"
                                                                                        name="nama_suami">
                                                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                                </div>
                                                                                <div
                                                                                    class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                    <label for="inputNIK_ibu"
                                                                                        class="form-label">NIK Ibu</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="inputNIK_ibu"
                                                                                        aria-describedby=""
                                                                                        value="{{ $ancs->nik_ibu }}"
                                                                                        name="nik_ibu">
                                                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputNIK_suami"
                                                                                    class="form-label">NIK
                                                                                    Suami</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputNIK_suami"
                                                                                    aria-describedby=""
                                                                                    value="{{ $ancs->nik_suami }}"
                                                                                    name="nik_suami">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-4 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputNoKK"
                                                                                    class="form-label">NO
                                                                                    KK</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputNoKK" aria-describedby=""
                                                                                    value="{{ $ancs->no_kk }}"
                                                                                    name="no_kk">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTgl_lahir_ibu"
                                                                                    class="form-label">Tanggal Lahir
                                                                                    Ibu</label>
                                                                                <input type="date" class="form-control"
                                                                                    id="inputTgl_lahir-ibu"
                                                                                    aria-describedby=""
                                                                                    value="{{ $ancs->tgl_lahir_ibu }}"
                                                                                    name="tgl_lahir_ibu">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTgl_lahir_suami"
                                                                                    class="form-label">Tanggal Lahir
                                                                                    Suami</label>
                                                                                <input type="date" class="form-control"
                                                                                    id="inputTgl_lahir-ibu"
                                                                                    aria-describedby=""
                                                                                    value="{{ $ancs->tgl_lahir_suami }}"
                                                                                    name="tgl_lahir_suami">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                                                <label for="input_pendidikan"
                                                                                    class="form-label">Pendidikan Ibu
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="input_pendidikan"
                                                                                    aria-describedby="" name="pddk_ibu"
                                                                                    value="{{ $ancs->pddk_ibu }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                                                <label for="input_pendidikan"
                                                                                    class="form-label">Pendidikan
                                                                                    Suami</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="input_pendidikan"
                                                                                    aria-describedby="" name="pddk_suami"
                                                                                    value="{{ $ancs->pddk_suami }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="input_pekerjaan"
                                                                                    class="form-label">Pekerjaan Ibu
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="input_pekerjaan"
                                                                                    aria-describedby=""
                                                                                    name="pekerjaan_ibu"
                                                                                    value="{{ $ancs->pekerjaan_ibu }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="input_pekerjaan"
                                                                                    class="form-label">Pekerjaan
                                                                                    Suami</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="input_pekerjaan"
                                                                                    aria-describedby=""
                                                                                    name="pekerjaan_suami"
                                                                                    value="{{ $ancs->pekerjaan_suami }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputAlamat"
                                                                                    class="form-label">Alamat</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputAlamat" aria-describedby=""
                                                                                    name="alamat"
                                                                                    value="{{ $ancs->alamat }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="input_noHP"
                                                                                    class="form-label">No
                                                                                    HP / BPJS</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="input_noHP" aria-describedby=""
                                                                                    name="no_hp"
                                                                                    value="{{ $ancs->no_hp }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>

                                                                            {{-- <a class="btn btn-primary" data-toggle="tab" href="#halaman2" id="nextButton" onclick="loca">Next</a> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Halaman 2 -->
                                                                <div class="tab-pane fade" id="halaman2" role="tabpanel"
                                                                    aria-labelledby="halaman2-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputParitas"
                                                                                    class="form-label">Paritas</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputParitas" aria-describedby=""
                                                                                    name="paritas"
                                                                                    value="{{ $ancs->paritas }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputSpasing"
                                                                                    class="form-label">Spasing</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputSpasing" aria-describedby=""
                                                                                    name="parsing"
                                                                                    value="{{ $ancs->parsing }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div class="mb-1">
                                                                                <label for="inputP4K"
                                                                                    class="form-label">P4K/Rencana
                                                                                    Kelahiran</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="inputP4K" name="p4k"
                                                                                    value='1'
                                                                                    {{ $ancs->p4k ? 'checked' : '' }}
                                                                                    checked>
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputHPHT"
                                                                                    class="form-label">HPHT</label>
                                                                                <input type="date" class="form-control"
                                                                                    id="inputHPHT" aria-describedby=""
                                                                                    name="HPPT"
                                                                                    value="{{ $ancs->HPPT }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputHPL"
                                                                                    class="form-label">HPL</label>
                                                                                <input type="date" class="form-control"
                                                                                    id="inputHPL" aria-describedby=""
                                                                                    name="HPL"
                                                                                    value="{{ $ancs->HPL }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputUmurKehamilan"
                                                                                    class="form-label">Umur Kehamilan
                                                                                    (Minggu)</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputUmurKehamilan"
                                                                                    aria-describedby=""
                                                                                    name="umur_kehamilan"
                                                                                    value="{{ $ancs->umur_kehamilan }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputAnamesaKehamilan"
                                                                                    class="form-label">Anamesa
                                                                                    Kehamilan</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputAnamesaKehamilan"
                                                                                    aria-describedby="" name="anamnesa"
                                                                                    value="{{ $ancs->anamnesa }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTinggiBadan"
                                                                                    class="form-label">Tinggi
                                                                                    Badan</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTinggiBadan"
                                                                                    aria-describedby="" name="TB"
                                                                                    value="{{ $ancs->TB }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputLILA"
                                                                                    class="form-label">LILA</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputLILA" aria-describedby=""
                                                                                    name="LILA"
                                                                                    value="{{ $ancs->LILA }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputBeratBadan"
                                                                                    class="form-label">Berat
                                                                                    Badan</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputBeratBadan"
                                                                                    aria-describedby="" name="BB"
                                                                                    value="{{ $ancs->BB }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTFU"
                                                                                    class="form-label">TFU</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTFU" aria-describedby=""
                                                                                    name="TFU"
                                                                                    value="{{ $ancs->TFU }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTensi"
                                                                                    class="form-label">Tensi</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTensi" aria-describedby=""
                                                                                    name="tensi"
                                                                                    value="{{ $ancs->tensi }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTT_K1"
                                                                                    class="form-label">Status TT K1</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTT_K1" aria-describedby=""
                                                                                    name="status_TT1_K1"
                                                                                    value="{{ $ancs->status_TT1_K1 }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTM"
                                                                                    class="form-label">TM/K1/K4</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTM" aria-describedby=""
                                                                                    name="TM"
                                                                                    value="{{ $ancs->TM }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputFE1"
                                                                                    class="form-label">FE1/FE2/FE3</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputFE1" aria-describedby=""
                                                                                    name="FE"
                                                                                    value="{{ $ancs->FE }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                                                <label for="inputBATlain"
                                                                                    class="form-label">BAT Lain</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputBATlain" aria-describedby=""
                                                                                    name="BAT_LAIN"
                                                                                    value="{{ $ancs->BAT_LAIN }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>



                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- Halaman 3 -->
                                                                <div class="tab-pane fade" id="halaman3" role="tabpanel"
                                                                    aria-labelledby="halaman3-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-4">

                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputPresentasi"
                                                                                    class="form-label">Presentasi</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputPresentasi"
                                                                                    aria-describedby="" name="PRESENTASI"
                                                                                    value="{{ $ancs->PRESENTASI }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputDJJ"
                                                                                    class="form-label">DJJ</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputDJJ" aria-describedby=""
                                                                                    name="DJJ"
                                                                                    value="{{ $ancs->DJJ }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputKepalaTHD"
                                                                                    class="form-label">Kepala THD
                                                                                    PAP</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputKepalaTHD"
                                                                                    aria-describedby=""
                                                                                    name="KEPALA_THD_PAP"
                                                                                    value="{{ $ancs->KEPALA_THD_PAP }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTBJ"
                                                                                    class="form-label">TBJ</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTBJ" aria-describedby=""
                                                                                    name="TBJ"
                                                                                    value="{{ $ancs->TBJ }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputHB"
                                                                                    class="form-label">HB</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputHB" aria-describedby=""
                                                                                    name="HB"
                                                                                    value="{{ $ancs->HB }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputProteinUrine"
                                                                                    class="form-label">Protein
                                                                                    Urine</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputProteinUrine"
                                                                                    aria-describedby=""
                                                                                    name="Protein_urine"
                                                                                    value="{{ $ancs->Protein_urine }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <div
                                                                                class="mb-1 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputGoldar"
                                                                                    class="form-label">Golongan
                                                                                    Darah</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputGoldar" aria-describedby=""
                                                                                    name="GOLDAR"
                                                                                    value="{{ $ancs->GOLDAR }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-1 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputHBsAG"
                                                                                    class="form-label">HBsAG</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputHBsAG" aria-describedby=""
                                                                                    name="HBSAG"
                                                                                    value="{{ $ancs->HBSAG }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-1 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputIMS"
                                                                                    class="form-label">IMS</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputIMS" aria-describedby=""
                                                                                    name="IMS"
                                                                                    value="{{ $ancs->IMS }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-1 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputHIV"
                                                                                    class="form-label">HIV</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputHIV" aria-describedby=""
                                                                                    name="HIV"
                                                                                    value="{{ $ancs->HIV }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div class="mb-1">
                                                                                <label for="inputKomplikasi"
                                                                                    class="form-label">Komplikasi</label>
                                                                                <div class="mb-0">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="inputHDK" name="HDK"
                                                                                        value="1"
                                                                                        {{ $ancs->HDK == '1' ? 'checked' : '' }}>
                                                                                    <input type="hidden" name="HDK"
                                                                                        value="0">
                                                                                    <label for="inputKomplikasi"
                                                                                        class="form-label">HDK</label>
                                                                                    <input type="hidden" name="ABORTUS"
                                                                                        value="0">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="inputAbortus" name="ABORTUS"
                                                                                        value="2"
                                                                                        {{ $ancs->ABORTUS == '2' ? 'checked' : '' }}>
                                                                                    <label for="inputKomplikasi"
                                                                                        class="form-label">Abortus</label>
                                                                                    <input type="hidden"
                                                                                        name="PERDARAHAN" value="0">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="inputPerdarahan"
                                                                                        name="PERDARAHAN" value="3"
                                                                                        {{ $ancs->PERDARAHAN == '3' ? 'checked' : '' }}>
                                                                                    <label for="inputBCG"
                                                                                        class="form-label">Perdarahan</label>
                                                                                    <input type="hidden" name="INFEKSI"
                                                                                        value="0">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="inputInveksi" name="INFEKSI"
                                                                                        value="4"
                                                                                        {{ $ancs->INFEKSI == '4' ? 'checked' : '' }}>
                                                                                    <label for="inputBCG"
                                                                                        class="form-label">Infeksi</label>
                                                                                    <input type="hidden" name="KPD"
                                                                                        value="0">
                                                                                </div>
                                                                                <div class="mb-0">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="inputKPD" name="KPD"
                                                                                        value="6"
                                                                                        {{ $ancs->KDP == '6' ? 'checked' : '' }}>
                                                                                    <label for="inputBCG"
                                                                                        class="form-label">KPD</label>


                                                                                    <label for="inputBCG"
                                                                                        class="form-label ms-1">lain-lain</label>
                                                                                    <input type="text"
                                                                                        class="form-controll"
                                                                                        id="inputlain-lain"
                                                                                        name="LAIN_LAIN"
                                                                                        value="{{ $ancs->LAIN_LAIN }}">
                                                                                    <input type="hidden"
                                                                                        name="Komplikasi" value="0">
                                                                                </div>
                                                                            </div>
                                                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}

                                                                            <div
                                                                                class="mb-1 form-outline border-0 border-bottom border-dark ">
                                                                                <label for="inputRujuk"
                                                                                    class="form-label">Rujuk Ke</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputRujuk" aria-describedby=""
                                                                                    name="RUJUK"
                                                                                    value="{{ $ancs->RUJUK }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>



                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTrimester1"
                                                                                    class="form-label">Trimester
                                                                                    1</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTrimester1"
                                                                                    aria-describedby=""
                                                                                    name="trisemester1"
                                                                                    value={{ $ancs->trisemester1 }}>
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTrimester2"
                                                                                    class="form-label">Trimester
                                                                                    2</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTrimester2"
                                                                                    aria-describedby=""
                                                                                    name="trisemester2"
                                                                                    value={{ $ancs->trisemester2 }}>
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputTrimester3"
                                                                                    class="form-label">Trimester
                                                                                    3</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputTrimester3"
                                                                                    aria-describedby=""
                                                                                    name="trisemester3"
                                                                                    value={{ $ancs->trisemester3 }}>
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputFR"
                                                                                    class="form-label">FR/R</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputFR" aria-describedby=""
                                                                                    name="FR"
                                                                                    value="{{ $ancs->FR }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                                <label for="inputFR"
                                                                                    class="form-label">keterangan</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputFR" aria-describedby=""
                                                                                    name="keterangan"
                                                                                    value="{{ $ancs->keterangan }}">
                                                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                            </div>


                                                                            <button type="submit"
                                                                                class="btn btn-success">Simpan</button>

                                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end tampilan --}}

                    </div>
                </div>
            </div>
        </div>
        {{-- end modal ubah --}}
    </div>
    </div>
    {{-- end --}}
