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
                        <h1 class=" fw-bold">Riwayat Pasien</h1>
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
                        <form class="form-inline my-2 my-lg-0" action="" method="POST">
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
                        {{-- <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Tanggal</div> --}}
                            {{-- <div class="col-8 col-md-8">: {{ $imunisasi->tanggal }}</div> --}}
                        {{-- </div> --}}
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Nama Anak</div>
                            {{-- <div class="col-8 col-md-8">: {{ $imunisasis->Anak->name }}</div> --}}
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">NIK</div>
                            {{-- <div class="col-8 col-md-8">: {{ $imunisasi->Anak->nik }}</div> --}}
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Nama Orang Tua</div>
                            {{-- <div class="col-8 col-md-8">: {{ $imunisasi->Ortu->name }}</div> --}}
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Tanggal Lahir</div>
                            {{-- <div class="col-8 col-md-8">: {{ $imunisasi->Anak->ttl }}</div> --}}
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 font-weight-bold">Alamat</div>
                            {{-- <div class="col-8 col-md-8">: {{ $imunisasi->Ortu->alamat }}</div> --}}
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-auto col-2">
                                <button type="button" id="buttonImunisasi" class="btn btn-outline-primary"
                                    data-bs-toggle="modal" data-bs-target="#ubahModal">Imunisasi</button>
                                </form>
                            </div>
                            <div class="col-md-auto col-2">
                                <button type="button" id="buttonBumil" class="btn btn-outline-success"
                                    data-bs-toggle="modal" data-bs-target="#ubahModal">Ibu Hamil</button>
                                </form>
                            </div>
                            <div class="col-md-auto col-2">
                                <button type="button" class="btn btn-outline-info" id="buttonKb"
                                    data-bs-toggle="modal" data-bs-target="#ubahModal">KB</button>
                                </form>
                            </div>
                        </div>
                        {{-- nama datanya --}}
                    </div>
                    {{-- end atas --}}
                    {{-- bawah --}}
                    <div class="col-md-12 ms-0">
                        {{-- imunisasi --}}
                        <div class="d-none" id="imunisasiData">
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
                                        {{-- <tr>
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

                                    </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class=" mb-3 mt-3 col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#ubahModal">Ubah</button>
                                        </form>
                                    </div>
                                    <div class="col-md-2 col-3">
                                        {{-- <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end imunisasi --}}
                        {{-- bumil --}}
                        <div class="d-none" id="bumilData">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1"
                                                role="tab" aria-controls="page1" aria-selected="true">Halaman 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2"
                                                role="tab" aria-controls="page2" aria-selected="true">Halaman 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3"
                                                role="tab" aria-controls="page3" aria-selected="true">Halaman 3</a>
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
                                        <div class="tab-pane fade" id="page2" role="tabpanel"
                                            aria-labelledby="page2-tab">
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
                                        <div class="tab-pane fade" id="page3" role="tabpanel"
                                            aria-labelledby="page3-tab">
                                            <div class="col-md-12 ms-0">
                                                <div class="overflow-x-scroll">
                                                    <table id="tabel-data"
                                                        class="table table-responsive table-sm border-black border-2 table-bordered">
                                                        <thead class="table-dark">
                                                            <tr class=" bg-secondary">
                                                                <th>Golongan Darah</th>
                                                                <th>HBsAG</th>
                                                                <th>IMS</th>
                                                                <th>HIV</th>
                                                                <th class=" text-center">Komplikasi
                                                                    <table class="text-white table">
                                                                        <thead>
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
                                                                </th>
                                                                <th>Rujuk Ke</th>
                                                                <th>Trimester 1</th>
                                                                <th>Trimester 2</th>
                                                                <th>Trimester 3</th>
                                                                <th>FR/R</th>
                                                                <th>Keterangan</th>
                                                            </tr>
                                                        </thead>

                                                        <tr>
                                                            {{-- <td>{{ $ancs->GOLDAR }}</td>
                                                        <td>{{ $ancs->HBSAG }}</td>
                                                        <td>{{ $ancs->IMS }}</td>
                                                        <td>{{ $ancs->HIV }}</td>
                                                        <td> --}}
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        {{-- <td>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                    <td>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                    <td>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                    <td>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                    <td>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                    <td>1</td> --}}
                                                                        {{-- <div class="row table"> --}}
                                                                        {{-- <td>{{ $ancs->HDK }}</td>
                                                                        <td>{{ $ancs->ABORTUS }}</td>
                                                                        <td>{{ $ancs->PERDARAHAN }}</td>
                                                                        <td>{{ $ancs->INFEKSI }}</td>
                                                                        <td>{{ $ancs->KPD }}</td>
                                                                        <td>{{ $ancs->LAIN_LAIN }}</td> --}}
                                                                        {{-- </div> --}}

                                                                    </tr>
                                                                </tbody>
                                                            </table>






                                                            </td>
                                                            {{-- <td>{{ $ancs->RUJUK }}</td>
                                                        <td>{{ $ancs->trisemester1 }}</td>
                                                        <td>{{ $ancs->trisemester2 }}</td>
                                                        <td>{{ $ancs->trisemester3 }}</td>
                                                        <td>{{ $ancs->FR }}</td>
                                                        <td>{{ $ancs->keterangan }}</td> --}}
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mb-3 mt-3 col-md-6">
                                    <div class="row">
                                        <div class="col-md-2 col-2 ms-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#ubahModal">Ubah</button>
                                            </form>
                                        </div>
                                        <div class="col-md-2 col-3">
                                            {{-- <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end bumil --}}
                        {{-- kb --}}
                        <div class=" d-none" id="kbData">
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
                                        {{-- <tr>
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
                                    </tr> --}}
                                    </tbody>
                                </table>

                            </div>
                            <div class=" mb-3 mt-3 col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#ubahModal">Ubah</button>
                                        </form>
                                    </div>
                                    <div class="col-md-2 col-3">
                                        {{-- <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end kb --}}

                    </div>
                    {{-- end bawah --}}

                    {{-- end konten --}}
                    <!-- Modal ubah-->

                    {{-- end modal ubah --}}
                </div>
            </div>
            {{-- end --}}
            <script>
                // imunisasi
                document.getElementById('buttonImunisasi').addEventListener('click', function() {
                    var imunisasiData = document.getElementById('imunisasiData');
                    if (imunisasiData.classList.contains('d-none')) {
                        imunisasiData.classList.remove('d-none');
                        imunisasiData.classList.add('d-block');
                    } else {
                        imunisasiData.classList.remove('d-block');
                        imunisasiData.classList.add('d-none');
                    }
                });
                // bumil
                document.getElementById('buttonBumil').addEventListener('click', function() {
                    var bumilData = document.getElementById('bumilData');
                    if (bumilData.classList.contains('d-none')) {
                        bumilData.classList.remove('d-none');
                        bumilData.classList.add('d-block');
                    } else {
                        bumilData.classList.remove('d-block');
                        bumilData.classList.add('d-none');
                    }
                });
                // KB
                document.getElementById('buttonKb').addEventListener('click', function() {
                    var kbData = document.getElementById('kbData');
                    if (kbData.classList.contains('d-none')) {
                        kbData.classList.remove('d-none');
                        kbData.classList.add('d-block');
                    } else {
                        kbData.classList.remove('d-block');
                        kbData.classList.add('d-none');
                    }
                });
            </script>
