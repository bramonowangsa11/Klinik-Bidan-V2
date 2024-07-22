@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="container min-vh-100 p-0 m-0 min-vw-100">
        <nav class="navbar navbar-expand-lg navbar-dark p-2 d-md-none m-0 min-vw-100 bg-dark" style="width: 47vh">
            <a class="navbar-brand" href="/dashboard">Dashboard</a>
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
        <div class="d-flex">
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
            {{-- isi konten nya disini --}}
            <div class="content flex-grow-1 p-2" style="width: 47vh">
                {{-- bagian kb dan search --}}
                <div class="row col-md-12 col-12 ms-0">
                    <div class=" col-md-7 mt-2">
                        <h1 class=" fw-bold">Riwayat Imunisasi</h1>
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
                    

                    {{-- filter nya  --}}
                    {{-- <div id="filterContainer" class="mt-2 d-none d-flex justify-content-end col-md-11">
                        <!-- Tambahkan elemen filter di sini -->
                        <div class="col-md-11 justify-content-end d-flex me-1">
                            <form action="" method="POST">
                                @csrf
                                <div class="row g-3 align-items-center ">
                                    <div class="col-auto">
                                        <label for="day">Tanggal</label>
                                        <input type="date" class="form-select" id="day" name="day"
                                            required>
                                        </input>
                                    </div>
                                    <div class="col-auto">
                                        <label for="month">Bulan</label>
                                        <input type="month" class="form-select" id="month" name="month"
                                            placeholder="Bulan">
                                        </input>
                                    </div>
                                    <div class="col-auto mt-auto">
                                        <button type="submit" class="btn btn-secondary">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    {{-- end filter --}}

                    {{-- <div class="col-md-10 mb-3 mt-2">
                        <a href="/daftar-imunisasi">
                            <button type="button" class="btn btn-success btn-sm">Tambah</button>
                        </a>
                    </div> --}}
                    {{-- <div class=" justify-end col-auto mt-2">
                    <div class=" justify-end col-auto mt-2">
                        <button id="filterButton" class="btn btn-outline-secondary btn-sm">
                            <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                            </svg>
                            Show Filter
                        </button>
                    </div> --}}

                </div>
                {{-- bagian tabel --}}
                <div class="row col-md-12 col-12 ms-0 mt-2">
                    <div class=" overflow-x-scroll">
                        <table class="table table-responsive table-sm table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Anak</th>
                                    <th>NIK</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Tanggal Lahir</th>
                                    <th>ALamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($imunisasis as $key => $imunisasi)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $imunisasi->tanggal }}</td>
                                        <td>{{ $imunisasi->Anak->name }}</td>
                                        <td>{{ $imunisasi->Anak->nik }}</td>
                                        <td>{{ $imunisasi->Ortu->name }}</td>
                                        <td>{{ $imunisasi->Anak->ttl }}</td>
                                        <td>{{ $imunisasi->Ortu->alamat }}</td>
                                        <td>
                                            <a href="{{ route('imunisasi.show', ['id' => $imunisasi->id]) }}">
                                                <button type="button" class="btn btn-info btn-sm">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $imunisasis->links() }}

                </div>
            </div>
            {{-- end konten --}}
        </div>
    </div>
    {{-- end --}}
    {{-- script --}}
    {{-- <script>
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
    </script> --}}
