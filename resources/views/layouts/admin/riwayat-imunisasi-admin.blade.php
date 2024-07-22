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
                        <h1 class=" fw-bold">Data Imunisasi</h1>
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
                        
                    </div>
                    {{-- end tambah --}}
                </div>
                {{-- end --}}
                {{-- bagian data --}}
                <div class="row col-md-12 col-12 ms-0 mt-2">
                    {{-- Atas --}}
                    {{-- <div class="row p-0 ms-1">
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
                    {{-- </div> --}}
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
                    </div>
                    {{-- end bawah --}}
                    <div class=" mb-3 mt-3 col-md-6">
                        <div class="row">
                            <div class="col-md-2 col-2">
                                
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
                    {{-- end konten --}}
                </div>
            </div>
            {{-- end --}}
