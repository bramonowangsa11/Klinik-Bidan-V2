@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
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
                {{-- bagian tabel --}}
                <div class="row col-md-12 col-12 ms-0 mt-2">
                    <div class="container mt-5">
                        <h1 class=" fw-bold">Riwayat Pemeriksaan</h1>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 bg-primary rounded-4">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Imunisasi</h5>
                                        {{-- <p class="card-text">Jumlah Reservasi Hari Ini</p> --}}
                                        {{-- <h2>{{$today_reservation}}</h2> --}}
                                        <a href="/riwayat-imunisasi" class="text-white">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 rounded-4" style="background-color: #44C95C">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Ibu Hamil</h5>
                                        {{-- <p class="card-text">Jumlah Pasien Terdaftar</p> --}}
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-anc" class="text-white">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 rounded-4"
                                    style="background-color: rgba(128, 11, 230, 0.6)">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">KB</h5>
                                        {{-- <p class="card-text">Jumlah Pasien Terdaftar</p> --}}
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-kb" class="text-white">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end konten --}}
            </div>
        </div>
        {{-- end --}}
