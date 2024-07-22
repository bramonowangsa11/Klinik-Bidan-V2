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
                        <h1 class=" fw-bold">Data KB</h1>
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
                        {{-- <div class="row mb-2">
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
                        </div> --}}
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
                    </div>
                    {{-- end bawah --}}
                    <div class=" mb-3 mt-3 col-md-6">
                        <div class="row">
                            <div class="col-md-2 col-2">
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahModal">Ubah</button>
                                </form> --}}
                            </div>
                            <div class="col-md-2 col-3">
                                {{-- <form action="{{ route('kb.destroy', $kb->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                    {{-- end konten --}}
                </div>
            </div>
            {{-- end --}}
