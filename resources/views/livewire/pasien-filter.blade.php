<div class="container min-vh-100 p-0 m-0 min-vw-100">
    <nav class="navbar navbar-expand-lg navbar-dark p-2 d-md-none m-0 min-vw-100 bg-dark" style="width: 54vh">
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
                    <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown"
                        data-bs-toggle="dropdown">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        input Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/daftar-imunisasi">Imunisasi</a>
                        <a class="dropdown-item" href="/daftar-bumil">Ibu Hamil</a>
                        <a class="dropdown-item" href="/daftar-kb">KB</a>
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
                    <a href="/tambah-pasien" class="nav-link text-white">
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
    <div class="d-flex">
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
                    <a href="#" class="nav-link text-white dropdown-toggle active" id="navbarDropdown"
                        data-bs-toggle="dropdown">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        input Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/daftar-imunisasi">Imunisasi</a>
                        <a class="dropdown-item" href="/daftar-bumil">Ibu Hamil</a>
                        <a class="dropdown-item" href="/daftar-kb">KB</a>
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
                    <a href="/tambah-pasien" class="nav-link text-white">
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
        {{-- isi konten nya disini --}}
        <div class="content flex-grow-1 p-2">
            {{-- bagian kb dan search --}}
            <div class="row col-md-12">
                <div class=" col-md-7 mt-2">
                    <h1 class=" fw-bold">Data Pasien</h1>
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
                <div class=" col-md-4">

                    <div class="row mt-2">
                        <div class="col-md-9">
                            <input class="form-control mr-sm-2" type="search" wire:model="name"
                                wire:keydown="filter" placeholder="Search" aria-label="Search" name="name">
                        </div>

                    </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <a href="/tambah-pasien">
                        <button type="button" class="btn btn-success btn-sm">tambah</button>
                    </a>
                </div>
            </div>
            {{-- bagian tabel --}}
            <div class="row col-md-12 ms-0 mt-2">
                <table class="table table-responsive table-sm table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th colspan="3">Riwayat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasiens as $key => $pasien)
                            <tr>
                                <td>{{ $pasien->nik }}</td>
                                <td>{{ $pasien->name }}</td>
                                <td>{{ $pasien->ttl }}</td>
                                <td>{{ $pasien->alamat }}</td>
                                <td>{{ $pasien->no_telp }}</td>
                                <td>{{ $pasien->jenis_kelamin }}</td>
                                <td>
                                    <a href="{{ route('admin.riwayatImunisasi', ['id' => $pasien->id]) }}">
                                        <button type="button" class="btn btn-info btn-sm">Imunisasi</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.riwayatAnc', ['id' => $pasien->id]) }}">
                                        <button type="button" class="btn btn-info btn-sm">Bumil</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.riwayatKb', ['id' => $pasien->id]) }}">
                                        <button type="button" class="btn btn-info btn-sm">KB</button>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pasiens->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        {{-- end konten --}}
    </div>
</div>
