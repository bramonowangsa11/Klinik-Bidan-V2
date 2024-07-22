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
                        <a href="/admin" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Imunisasi
                        </a>
                    </li>
                    <li>
                        <a href="/ibu-hamil" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Ibu Hamil
                        </a>
                    </li>
                    <li>
                        <a href="/data-kb" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            KB
                        </a>
                    </li>
                    <li>
                        <a href="/input-table" class="nav-link text-white dropdown-toggle active" id="navbarDropdown"
                            data-bs-toggle="dropdown">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            input Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/input-table">Imunisasi</a>
                            <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                            <a class="dropdown-item" href="/input-kb">KB</a>
                        </div>
                    </li>
                    <li>
                        <a href="/daftar-reservasi" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Daftar Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/daftar-pasien" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Tambah Pasien
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
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
                <h4 class="text-white">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Imunisasi
                        </a>
                    </li>
                    <li>
                        <a href="/ibu-hamil" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Ibu Hamil
                        </a>
                    </li>
                    <li>
                        <a href="/data-kb" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            KB
                        </a>
                    </li>
                    <li>
                        <a href="/data-pasien" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Daftar Pasien
                        </a>
                    </li>
                    <li>
                        <a href="/input-table" class="nav-link text-white dropdown-toggle active" id="navbarDropdown"
                            data-bs-toggle="dropdown">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            input Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/input-table">Imunisasi</a>
                            <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                            <a class="dropdown-item" href="/input-kb">KB</a>
                        </div>
                    </li>
                    <li>
                        <a href="/daftar-reservasi" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Daftar Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/daftar-pasien" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Tambah Pasien
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
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
                        <script>
                document.addEventListener('DOMContentLoaded', function() {
                    @if ($errors->any())
                        let errorMessages = '';

                        @foreach ($errors->all() as $error)
                            errorMessages += "{{ $error }}\n";
                        @endforeach

                        Swal.fire({
                            title: 'Error!',
                            text: errorMessages,
                            icon: 'error',
                            confirmButtonText: 'OK',
                            customClass: {
                                popup: 'small-alert', // kelas CSS untuk pop-up
                                title: 'alert-title', // kelas CSS untuk judul
                                text: 'alert-text' // kelas CSS untuk teks
                            }
                        });
                    @endif
                });
            </script>
                    </div>
                    {{-- end alert --}}
                    {{-- search --}}
                    <div class=" col-md-4">
                        <form class="form-inline my-2 my-lg-0" action="{{ route('imunisasi.search') }}" method="POST">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-9 col-7">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search" name="keyword">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- end search --}}
                    {{-- tambah --}}
                    <div class="col-md-2 col-2">
                        <a href="/input-kb">
                            <button type="button" class="btn btn-success btn-sm">tambah</button>
                        </a>
                    </div>
                    {{-- end tambah --}}
                </div>
                {{-- end --}}
                {{-- bagian data --}}
                <div class="row col-md-12 col-12 ms-0 mt-2">
                    {{-- Atas --}}
                    <div class="row p-0 ms-1">
                        <div class=" col-md-5">
                            {{-- <div class="row mb-2">
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
                            </div> --}}
                        </div>
                        <div class=" col-md-5">

                            {{-- <div class="row mb-2">
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
                            </div> --}}
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
                                                    {{-- <tr>
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
                                                    </tr> --}}
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
                                                    {{-- <tr>
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
                                                    </tr> --}}
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
                                                    {{-- <tr>
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

                                                    </tr> --}}

                                                    <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                                                </tbody>                                         
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- end bawah --}}
                    <div class=" mb-3 mt-3 col-md-6">
                        <div class="row">
                            {{-- <div class="col-md-2 col-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahModal">Ubah</button>

                            </div> --}}
                            <div class="col-md-2 col-3">
                                {{-- <form action="{{ route('bumil.delete', $ancs->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                    {{-- end konten --}}
                    <!-- Modal ubah-->
                    
                </div>
            </div>
        </div>
        {{-- end modal ubah --}}
    </div>
    </div>
    {{-- end --}}
