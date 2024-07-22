@extends('layouts.bootstrap')
@section('content')
<section class="masthead" style="background:url({{asset('images/group3.jpg')}})">
  <div class="container vh-100 min-vw-100" style="backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-9 ">
        {{-- card --}}
        <div class=" card small text-black" style="border-radius: 25px; background-color:rgb(229, 228, 228)">
                <div class="col d-flex h-75">
                <img src="{{asset('images/Group 1.png')}}" class="card-img img-fluid" alt="..." style="width: 25%; height:100%; margin-right:49%; border-radius:25px">
                <img src="{{asset('images/Group 2.png')}}" class="card-img img-fluid" alt="..." style="width: 25%; height:50%; border-radius:25px; margin-left:9px">
            </div>
            
            
          <div class="card-body p-md-1 ">
            
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-4 order-2 order-lg-1">

                {{-- <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p> --}}
                
                <form class="mx-1 mx-md-4 mt-0" method="POST" action="/daftar">
                  @csrf
                    {{-- nama lengkap --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline border-bottom border-dark flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Nama Lengkap</label>
                        <input style="background-color: rgb(229, 228, 228)" type="text" id="form3Example1c" class="form-control" name="name" value="{{old('name')}}"/>
                    </div>
                  </div>
                  {{-- NIK --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline border-bottom border-dark flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">NIK</label>
                        <input style="background-color: rgb(229, 228, 228)" type="text" id="form3Example3c" class="form-control" name="nik" value="{{old('nik')}}" />
                    </div>
                  </div>
                  {{-- ALamat --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline border-bottom border-dark flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Alamat</label>
                        <input style="background-color: rgb(229, 228, 228)" type="text" id="form3Example4c" class="form-control" name="alamat" value="{{old('alamat')}}"/>
                    </div>
                  </div>
                  {{-- Tanggal Lahir --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline border-bottom border-dark flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">Tanggal Lahir</label>
                        <input style="background-color: rgb(229, 228, 228)" type="date" id="form3Example4cd" class="form-control" name="ttl" value="{{old('ttl')}}" />
                    </div>
                  </div>
                  {{-- Nomor Telepon --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline border-bottom border-dark flex-fill mb-0">
                        <label class="form-label" for="form3Example5cd">Nomor Telepon</label>
                        <input style="background-color: rgb(229, 228, 228)" type="text" id="form3Example5cd" class="form-control" name="no_telp" value="{{old('no_telp')}}"/>
                    </div>
                  </div>
                  {{-- Jenis Kelamin --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <div><label class="form-label" for="form3Example6cd">Jenis Kelamin</label></div>
                         <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Laki-Laki" checked>
                         <label class="form-check-label me-3" for="flexRadioDefault1">Laki-Laki</label>
                         <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="Perempuan">
                         <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
                    </div>
                  </div>
                  {{-- <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div> --}}
                {{-- </form> --}}
                {{-- Bagian Kanan --}}
              </div>
              <div class="col-md-10 col-lg-6 col-xl-4 order-2 order-lg-1 mt-lg-5">
                {{-- <form class="mx-1 mx-md-4 mt-lg-5"> --}}
                {{-- email --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="border-bottom border-dark flex-fill mb-0 mt-lg-4">
                        <label class="form-label" for="form3Example7c">Email</label>
                        <input style="background-color: rgb(229, 228, 228)" type="email" id="form3Example7c" class="form-control" name="email" value="{{old('email')}}"  required  />
                    </div>
                  </div>
                  {{-- Password --}}
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="border-bottom border-dark form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Password</label>
                        <input type="password" id="form3Example4c" class="form-control " name="password" style="background-color: rgb(229, 228, 228)" required />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label font-weight-bold fs-1 me-lg-5" for="button-register">Daftar</label>
                    <button id="button-register" type="submit" class=" btn btn-sm border-0 col-2 mb-2">
                        <img src="{{asset('images/arrow.png')}}" alt="daftar" class=" ">
                    </button>
                    <div>
                      <a class="text-black text-decoration-none fw-bold">sudah punya akun?</a>
                      <a class="text-decoration-none fw-bold" href="/">Login</a>
                    </div>
                    <!-- pesan eror dan sukses -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>  
                      @foreach($errors->all() as $error)
                        <li>
                          {{ $error }}
                        </li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <!-- akhir alert -->
                    {{-- <button type="button" class="btn btn-primary btn-lg">Register</button> --}}
                  </div>
                </form>
                
                

                {{-- <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>