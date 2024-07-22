@extends('layouts.bootstrap')
@section('content')


    {{-- css --}}
    <style>
        .background-card-user {
            /* filter: blur(8px);
                                -webkit-filter: blur(8px); */

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{ asset('images/background-foto2.jpg') }});
        }
    </style>
    {{-- end css --}}
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
                        <h1>Dashboard</h1>
                        <div class="row">
                            <div class="col-md-auto">

                                <div class="card card-custom mb-4 rounded-4 background-card-user">

                                    <div class="card-body text-white rounded-4"
                                        style="backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);">

                                        <div class="justify-content-center">
                                            <div class="col-md-auto justify-content-center d-flex ">
                                                <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="60"
                                                    height="60" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-width="2"
                                                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </div>
                                            <div class="col-md-auto d-block">
                                                <h5 class="card-title fw-bold text-center">{{ Auth::user()->name }}</h5>
                                                <h6 class=" fw-semibold">{{ Auth::user()->name }}</h6>
                                                <h6 class=" fw-semibold">{{ Auth::user()->email }}</h6>
                                                <h6 class=" fw-semibold">{{$user_data->ttl}}</h6>
                                                <h6 class=" fw-semibold">{{$user_data->no_telp}}</h6>
                                            </div>
                                        </div>



                                        {{-- <p class="card-text">Jumlah Reservasi Hari Ini</p> --}}
                                        {{-- <h2>{{$today_reservation}}</h2> --}}
                                        {{-- <a href="#" class="text-white">Go somewhere ></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="card card-custom mb-4 rounded-4"
                                    style="background:url({{ asset('images/mountain.jpg') }}); background-size:cover; filter:blur(0px)">
                                    <div class="card-body text-white rounded-4"
                                        style="backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);">
                                        <div>
                                            <svg id="Icons_FamilyWithTwoChildren"
                                                overflow="hidden" fill="currentColor" width="100" height="100"
                                                version="1.1" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g>
                                                    <circle cx="59" cy="23" r="5" />
                                                    <circle cx="81" cy="47" r="4" />
                                                    <circle cx="37" cy="23" r="5" />
                                                    <circle cx="15" cy="47" r="4" />
                                                    <path
                                                        d=" M 91.8 64.2 L 88.3 55.9 C 87.1 54.2 85.2 52.9 83.1 52.3 C 82.5 52.1 81.7 52 81 52 C 79.6 52 78.3 52.3 77.1 52.9 L 71 48.6 L 67.4 33.6 C 67.3 33.2 67 32.7 66.7 32.5 C 65.5 31.6 64.1 30.9 62.6 30.5 C 61.4 30.2 60.2 30 59 30 C 57.8 30 56.6 30.2 55.5 30.5 C 54 30.9 52.6 31.6 51.4 32.5 C 51 32.8 50.8 33.2 50.7 33.6 L 48 44.4 L 45.4 33.6 C 45.3 33.2 45 32.7 44.7 32.5 C 43.5 31.6 42.1 30.9 40.6 30.5 C 39.4 30.2 38.2 30 37 30 C 35.8 30 34.6 30.2 33.5 30.5 C 32 30.9 30.6 31.6 29.4 32.5 C 29 32.8 28.8 33.2 28.7 33.6 L 25.1 48.6 L 19 52.9 C 17.7 52.3 16.4 52 15 52 C 14.3 52 13.5 52.1 12.9 52.3 C 10.8 52.8 8.9 54.1 7.7 55.9 L 4.2 64.2 C 3.8 65.1 4.1 66.1 4.8 66.7 C 5.2 66.9 5.6 67 6 67 C 6.8 67 7.5 66.5 7.8 65.8 L 10 60.6 L 10 66 L 10 78 L 14 78 L 14 66 L 16 66 L 16 78 L 20 78 L 20 57 L 20.1 57 L 28 51.5 C 28.4 51.2 28.7 50.8 28.8 50.3 L 32 37 L 32 78 L 36 78 L 36 55 L 38 55 L 38 78 L 42 78 L 42 37 L 46.1 53.5 C 46.3 54.4 47.1 55 48 55 C 48.9 55 49.7 54.4 49.9 53.5 L 54 37 L 54 45.4 L 50.5 60 L 54 60 L 54 78 L 58 78 L 58 60 L 60 60 L 60 78 L 64 78 L 64 60 L 67.5 60 L 64 45.4 L 64 37 L 67.3 50.3 C 67.4 50.8 67.7 51.2 68.1 51.5 L 76.1 57.1 L 76.1 63.3 L 74 69 L 76 69 L 76 78 L 80 78 L 80 69 L 82 69 L 82 78 L 86 78 L 86 69 L 88 69 L 86.1 63.7 L 86.1 60.6 L 88.3 65.8 C 88.6 66.6 89.4 67 90.1 67 C 90.5 67 90.9 66.9 91.3 66.6 C 91.9 66.1 92.2 65 91.8 64.2 Z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <h5 class="card-title fw-bold">Riwayat KB</h5>
                                        <p class="card-text">Riwayat Pemeriksaan Terkahir</p>
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-kb" class="text-white text-decoration-none">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="card card-custom mb-4 rounded-4"
                                    style="background:url({{ asset('images/mountain.jpg') }}); background-size:cover; filter:blur(0px)">
                                    <div class="card-body text-white rounded-4"
                                        style="backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);">
                                        <div>
                                            <svg id="Icons" width="100" height="100"
                                                viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: #9f5ae5;
                                                        }

                                                        .cls-2 {
                                                            fill: #bf8df2;
                                                        }

                                                        .cls-3 {
                                                            fill: none;
                                                        }

                                                        .cls-3,
                                                        .cls-6 {
                                                            stroke: #45413c;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                        }

                                                        .cls-4,
                                                        .cls-6 {
                                                            fill: #ffe500;
                                                        }

                                                        .cls-5 {
                                                            fill: #fff48c;
                                                        }

                                                        .cls-7 {
                                                            fill: #724f3d;
                                                        }

                                                        .cls-8 {
                                                            fill: #a86c4d;
                                                        }
                                                    </style>
                                                </defs>
                                                <title />
                                                <path class="cls-1"
                                                    d="M29.45,23.82v0a2.5,2.5,0,0,0-2.5-2.5h-1.2A7,7,0,0,0,21.14,23a8.41,8.41,0,0,0-2.71,4.69,1,1,0,0,1-.83.79,9.09,9.09,0,0,0-7.7,9.8,9.28,9.28,0,0,0,9.34,8.26H28.6a1,1,0,0,0,1-1V40.58a13.75,13.75,0,0,0-.16-2.09C28.67,33.63,29.45,28.74,29.45,23.82Z"
                                                    data-name="&lt;Path&gt;" id="_Path_" />
                                                <g data-name="&lt;Group&gt;" id="_Group_">
                                                    <path class="cls-2"
                                                        d="M10,38.86a9.07,9.07,0,0,1,7.61-7.54,1,1,0,0,0,.83-.79,8.44,8.44,0,0,1,2.71-4.7,7,7,0,0,1,4.61-1.68H27a2.52,2.52,0,0,1,2.45,2c0-.78.05-1.55.05-2.33v0a2.5,2.5,0,0,0-2.5-2.5h-1.2A7,7,0,0,0,21.14,23a8.41,8.41,0,0,0-2.71,4.69,1,1,0,0,1-.83.79,9.09,9.09,0,0,0-7.7,9.8C9.92,38.45,10,38.66,10,38.86Z"
                                                        data-name="&lt;Path&gt;" id="_Path_2" />
                                                </g>
                                                <path class="cls-3"
                                                    d="M29.45,23.82v0a2.5,2.5,0,0,0-2.5-2.5h-1.2A7,7,0,0,0,21.14,23a8.41,8.41,0,0,0-2.71,4.69,1,1,0,0,1-.83.79,9.09,9.09,0,0,0-7.7,9.8,9.28,9.28,0,0,0,9.34,8.26H28.6a1,1,0,0,0,1-1V40.58a13.75,13.75,0,0,0-.16-2.09C28.67,33.63,29.45,28.74,29.45,23.82Z"
                                                    data-name="&lt;Path&gt;" id="_Path_3" />
                                                <path class="cls-4"
                                                    d="M13.7,28.26h2.15a1.2,1.2,0,0,1,1.2,1.2v.12a2.18,2.18,0,0,1-2.18,2.18h-.19a2.18,2.18,0,0,1-2.18-2.18v-.12a1.2,1.2,0,0,1,1.2-1.2Z"
                                                    data-name="&lt;Rectangle&gt;" id="_Rectangle_"
                                                    transform="translate(-12.69 10.92) rotate(-28.98)" />
                                                <path class="cls-5"
                                                    d="M12.58,30.73a3.17,3.17,0,0,0,.29.4L13,31l2.58-1.43a1.24,1.24,0,0,1,1.21,0,2.18,2.18,0,0,0-.27-1.07l-.06-.1A1.19,1.19,0,0,0,14.87,28L13,29a1.2,1.2,0,0,0-.47,1.63Z"
                                                    data-name="&lt;Path&gt;" id="_Path_4" />
                                                <path class="cls-3"
                                                    d="M13.7,28.26h2.15a1.2,1.2,0,0,1,1.2,1.2v.12a2.18,2.18,0,0,1-2.18,2.18h-.19a2.18,2.18,0,0,1-2.18-2.18v-.12a1.2,1.2,0,0,1,1.2-1.2Z"
                                                    data-name="&lt;Rectangle&gt;" id="_Rectangle_2"
                                                    transform="translate(-12.69 10.92) rotate(-28.98)" />
                                                <path class="cls-4"
                                                    d="M23.6,27.21l-.54,1.33a9.89,9.89,0,0,1-6.93,5.92h0a2,2,0,0,0-1.48,2.36h0A2,2,0,0,0,17,38.29h0A13.81,13.81,0,0,0,26.71,30l.54-1.33Z"
                                                    data-name="&lt;Path&gt;" id="_Path_5" />
                                                <path class="cls-5"
                                                    d="M14.65,36.82a1.93,1.93,0,0,0,.19.47A2.32,2.32,0,0,1,16.41,36a11.73,11.73,0,0,0,8.23-7l.48-1.18-1.52-.61-.54,1.33a9.89,9.89,0,0,1-6.93,5.92,2,2,0,0,0-1.48,2.36Z"
                                                    data-name="&lt;Path&gt;" id="_Path_6" />
                                                <path class="cls-3"
                                                    d="M23.6,27.21l-.54,1.33a9.89,9.89,0,0,1-6.93,5.92h0a2,2,0,0,0-1.48,2.36h0A2,2,0,0,0,17,38.29h0A13.81,13.81,0,0,0,26.71,30l.54-1.33Z"
                                                    data-name="&lt;Path&gt;" id="_Path_7" />
                                                <path class="cls-1"
                                                    d="M26.6,21.85h0A2.41,2.41,0,0,1,29,24.26V28.6a0,0,0,0,1,0,0H24.19a0,0,0,0,1,0,0V24.26A2.41,2.41,0,0,1,26.6,21.85Z"
                                                    data-name="&lt;Rectangle&gt;" id="_Rectangle_3"
                                                    transform="matrix(0.93, 0.38, -0.38, 0.93, 11.45, -8.16)" />
                                                <path class="cls-2"
                                                    d="M27.87,22.1a2.41,2.41,0,0,0-3.14,1.32L24,25.12a2.41,2.41,0,0,1,4.46,1.81l.69-1.7A2.4,2.4,0,0,0,27.87,22.1Z" />
                                                <path class="cls-3"
                                                    d="M26.6,21.85h0A2.41,2.41,0,0,1,29,24.26V28.6a0,0,0,0,1,0,0H24.19a0,0,0,0,1,0,0V24.26A2.41,2.41,0,0,1,26.6,21.85Z"
                                                    data-name="&lt;Rectangle&gt;" id="_Rectangle_4"
                                                    transform="matrix(0.93, 0.38, -0.38, 0.93, 11.45, -8.16)" />
                                                <ellipse class="cls-6" cx="25.05" cy="12.12"
                                                    data-name="&lt;Path&gt;" id="_Path_8" rx="7.27"
                                                    ry="6.92" transform="translate(9.45 35.16) rotate(-81.72)" />
                                                <path class="cls-7"
                                                    d="M17.6,9.44a9.93,9.93,0,0,0,4,1.87c3,.88,4,.22,4,.22a2.22,2.22,0,0,1,2.59.07A2,2,0,0,1,26.74,15a13.11,13.11,0,0,1-1.34,6.37.51.51,0,0,0,.41.78c3.75.34,7.13-1.48,7.87-2.34s.8-8.49-.69-12.87c-.91-2.69-4.85-4.69-8.65-4C19.41,3.83,17.6,7.39,17.6,9.44Z"
                                                    data-name="&lt;Path&gt;" id="_Path_9" />
                                                <g data-name="&lt;Group&gt;" id="_Group_2">
                                                    <path class="cls-8"
                                                        d="M24.34,5.65C28.14,5,32.08,7,33,9.65a28.41,28.41,0,0,1,1.19,7.46A31.42,31.42,0,0,0,33,6.94c-.91-2.69-4.85-4.69-8.65-4-4.93.89-6.74,4.45-6.74,6.5a4.27,4.27,0,0,0,.59.43A8.13,8.13,0,0,1,24.34,5.65Z"
                                                        data-name="&lt;Path&gt;" id="_Path_10" />
                                                </g>
                                                <path class="cls-3"
                                                    d="M17.6,9.44a9.93,9.93,0,0,0,4,1.87c3,.88,4,.22,4,.22a2.22,2.22,0,0,1,2.59.07A2,2,0,0,1,26.74,15a13.11,13.11,0,0,1-1.34,6.37.51.51,0,0,0,.41.78c3.75.34,7.13-1.48,7.87-2.34s.8-8.49-.69-12.87c-.91-2.69-4.85-4.69-8.65-4C19.41,3.83,17.6,7.39,17.6,9.44Z"
                                                    data-name="&lt;Path&gt;" id="_Path_11" />
                                            </svg>
                                        </div>
                                        <h5 class="card-title fw-bold">Riwayat ANC</h5>
                                        <p class="card-text">Riwayat Pemeriksaan Terkahir</p>
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-anc" class="text-white text-decoration-none">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="card card-custom mb-4 rounded-4"
                                    style="background:url({{ asset('images/mountain.jpg') }}); background-size:cover; filter:blur(0px)">
                                    <div class="card-body text-white rounded-4"
                                        style="backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100"
                                                version="1.1" viewBox="0 0 512 512" fill="currentColor"
                                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <g
                                                    id="_x32_4_x2C__Injection_x2C__syringe_x2C__immunization_x2C__drug_x2C__hospital_x2C__vaccine">
                                                    <g>
                                                        <path
                                                            d="M230.898,351.429h-0.041V120.449c0-5.523-4.478-10-10-10h-20.123v-10.082c0-13.082-8.396-24.234-20.081-28.366V10    c0-5.523-4.478-10-10-10s-10,4.477-10,10v62.001c-11.685,4.132-20.082,15.284-20.082,28.366v10.082h-20.122    c-5.522,0-10,4.477-10,10v230.979h-0.041c-16.587,0-30.082,13.495-30.082,30.082s13.495,30.082,30.082,30.082h30.163v40.245    h-0.041c-16.587,0-30.081,13.495-30.081,30.082S123.943,512,140.53,512h60.245c16.587,0,30.082-13.495,30.082-30.082    s-13.495-30.082-30.082-30.082h-0.041v-40.245h30.164c16.587,0,30.081-13.495,30.081-30.082S247.485,351.429,230.898,351.429z     M160.571,100.367c0-5.559,4.522-10.082,10.082-10.082c5.559,0,10.081,4.522,10.081,10.082v10.082h-20.163V100.367z     M130.449,331.265h20.122c5.522,0,10-4.477,10-10s-4.478-10-10-10h-20.122v-20.163h20.122c5.522,0,10-4.477,10-10s-4.478-10-10-10    h-20.122v-20.163h20.122c5.522,0,10-4.477,10-10s-4.478-10-10-10h-20.122v-20.164h20.122c5.522,0,10-4.477,10-10s-4.478-10-10-10    h-20.122v-20.163h20.122c5.522,0,10-4.477,10-10s-4.478-10-10-10h-20.122v-20.163c19.885,0,64.847,0,80.408,0v220.979h-80.408    V331.265z M210.857,481.918c0,5.559-4.522,10.082-10.082,10.082H140.53c-5.559,0-10.081-4.522-10.081-10.082    s4.522-10.082,10.081-10.082c5.325,0,40.417,0,60.245,0C206.335,471.837,210.857,476.359,210.857,481.918z M180.734,451.837    h-20.163v-40.245h20.163V451.837z" />
                                                        <path
                                                            d="M401.551,322.543v-23.115c11.685-4.132,20.082-15.284,20.082-28.366c0-16.587-13.495-30.082-30.082-30.082h-60.245    c-16.587,0-30.081,13.495-30.081,30.082c0,13.082,8.396,24.235,20.081,28.366v23.115c-17.294,4.409-30.122,20.115-30.122,38.763    V472c0,22.056,17.944,40,40,40h60.49c22.056,0,40-17.944,40-40V361.306C431.674,342.658,418.845,326.952,401.551,322.543z     M321.225,271.061c0-5.559,4.522-10.082,10.081-10.082h60.245c5.56,0,10.082,4.522,10.082,10.082s-4.522,10.082-10.082,10.082    h-60.245C325.747,281.143,321.225,276.62,321.225,271.061z M381.551,301.143v20.163h-40.245v-20.163H381.551z M381.51,446.735    h-10.081v10.082c0,5.523-4.478,10-10,10s-10-4.477-10-10v-10.082h-10.082c-5.522,0-10-4.477-10-10s4.478-10,10-10h10.082v-10.082    c0-5.523,4.478-10,10-10s10,4.477,10,10v10.082h10.081c5.522,0,10,4.477,10,10S387.032,446.735,381.51,446.735z M411.674,361.469    h-100.49v-0.163c0-11.028,8.972-20,20-20c14.876,0,45.756,0,60.49,0c11.028,0,20,8.972,20,20V361.469z" />
                                                    </g>
                                                </g>
                                                <g id="Layer_1" />
                                            </svg>
                                        </div>
                                        <h5 class="card-title fw-bold">Riwayat Imunisasi</h5>
                                        <p class="card-text">Riwayat Pemeriksaan Terkahir</p>
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-imunisasi" class="text-white text-decoration-none">Go somewhere
                                            ></a>
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
