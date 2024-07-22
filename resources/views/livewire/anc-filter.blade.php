<div class="container min-vh-100 p-0 m-0 min-vw-100">
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

    </nav>
    <div class="d-flex">
        <div class="sidebar p-3 flex-shrink-0 d-none d-md-block bg-dark m-0 vh-100">
            <a href="/dashboard" class="text-white fw-bold fs-5 text-decoration-none">Dashboard</a>
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
        <div class="content flex-grow-1 p-2" style="width: 47vh">
            {{-- bagian kb dan search --}}
            <div class="row col-md-12 col-11 ms-0">
                <div class=" col-md-7 mt-2">
                    <h1 class=" fw-bold">Data BUMIL</h1>
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
                {{-- <div class=" col-md-4 bg-danger">
                        <div class="row mt-2">
                            <div class="col-md-9">
                                <input class="form-control mr-sm-2" type="search" wire:model="name"
                                    wire:keydown="filter" placeholder="Search" aria-label="Search" name="name">
                            </div>
                            <div>
                                <input type="date" wire:model="tanggal">
                                <input type="month" wire:model="bulan">
                            </div>
                            <button wire:click="filter">Filter/Search</button>
                            <button wire:click="resetFilters">Reset Filter</button>
                        </div>
                        <button id="filterButton" class="btn btn-primary">Show Filter</button>
                    </div> --}}
                {{-- <div class="col-md-2">
                        <a href="/daftar-imunisasi">
                            <button type="button" class="btn btn-success btn-sm">tambah</button>
                        </a>
                        
                    </div> --}}
                <div class=" col-md-4">

                    <div class="row mt-2">
                        <div class="col-md-9">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                aria-label="Search" name="keyword" wire:model="name" wire:keydown="filter">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </div>

                </div>
                {{-- filter nya  --}}
                <div id="filterContainer" class="mt-2 d-none d-flex justify-content-end col-md-11">
                    <!-- Tambahkan elemen filter di sini -->
                    <div class="col-md-11 justify-content-end d-flex me-1">

                        <div class="row g-3 align-items-center ">
                            <div class="col-auto">
                                <label for="day">Tanggal</label>
                                <input type="date" class="form-select" id="day" name="day"
                                    wire:model="tanggal">
                                </input>
                            </div>
                            <div class="col-auto">
                                <label for="month">Bulan</label>
                                <input type="month" class="form-select" id="month" name="month"
                                    placeholder="Bulan" wire:model="bulan">
                                </input>
                            </div>
                            <div class="col-auto mt-auto">
                                <button type="submit" class="btn btn-secondary" wire:click="filter">Filter</button>
                                <button type="submit" class="btn btn-secondary" wire:click="resetFilters"> Reset
                                    Filter</button>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- end filter --}}
                <div class="col-md-9 mb-3 mt-2">
                    <a href="/daftar-bumil">
                        <button type="button" class="btn btn-success btn-sm">Tambah</button>
                    </a>
                </div>
                <div class=" justify-end col-md-2 col-auto mt-2 ms-md-3">
                    <button id="filterButton" class="btn btn-outline-secondary btn-sm ms-md-5">
                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                        </svg>
                        Show Filter
                    </button>
                </div>

            </div>
            {{-- bagian tabel --}}
            <div class="row col-md-12 col-12 mt-2 ms-0">
                <div class="overflow-x-scroll mb-2">
                    <table class="table table-responsive table-sm table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Nama Ibu</th>
                                <th>Nama Suami</th>
                                <th>NIK Ibu</th>
                                <th>NIK Suami</th>
                                <th>NO KK</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ancs as $key => $anc)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $anc->tgl_pemeriksaan }}</td>
                                    <td>{{ $anc->Istri->name }}</td>
                                    <td>{{ $anc->Suami->name }}</td>
                                    <td>{{ $anc->Istri->nik }}</td>
                                    <td>{{ $anc->Suami->nik }}</td>
                                    <td>{{ $anc->no_kk }}</td>

                                    <td>{{ $anc->Suami->alamat }}</td>

                                    <td>
                                        <a href="{{ route('bumil.showid', ['id' => $anc->id]) }}">
                                            <button type="button" class="btn btn-info btn-sm">Detail</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                {{ $ancs->links() }}
            </div>
        </div>
        {{-- end konten --}}
    </div>
</div>
<script>
    document.getElementById('filterButton').addEventListener('click', function() {
        var filterContainer = document.getElementById('filterContainer');
        if (filterContainer.classList.contains('d-none')) {
            filterContainer.classList.remove('d-none');
            filterContainer.classList.add('d-block');
        } else {
            filterContainer.classList.remove('d-block');
            filterContainer.classList.add('d-none');
        }
    });
</script>
