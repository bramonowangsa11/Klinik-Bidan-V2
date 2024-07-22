@extends('layouts.bootstrap')
@section('content')
    <style>
        .bg-blur {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
    <section class="masthead bg-blur" style="background:url({{ asset('images/group3.jpg') }})">
        <div class="container vh-100 min-vw-100" style="backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-5 col-xl-5 ">
                    {{-- card --}}
                    <div class=" card small text-black h-50" style="border-radius: 25px; background-color:rgb(229, 228, 228)">
                        <div class="col d-flex h-25">
                            <img src="{{ asset('images/Group 1.png') }}" class="card-img img-fluid" alt="..."
                                style="width: 25%; height:50%; margin-right:49%; border-radius:25px">
                            <img src="{{ asset('images/Group 2.png') }}" class="card-img img-fluid" alt="..."
                                style="width: 25%; height:100%; border-radius:25px; margin-left:9px">
                        </div>
                        <div class="card-body p-md-1 ">
                            <h1 class=" fw-bold">Konfirmasi</h1>
                            <h5>Anda sudah masuk sebagai {{Auth::user()->role}}, Anda harus Logout sebelum masuk sebagai pengguna yang berbeda.
                            </h5>
                            <div class=" d-flex justify-content-end">
                                <a href="/logout" class="btn btn-primary me-2 fw-bold">Keluar</a>
                                <a href="{{Auth::user()->role=='admin' ? route('home') : route('dashboard.user')}}" class="btn btn-secondary fw-bold">Batal</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
