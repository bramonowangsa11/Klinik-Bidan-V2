@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}

    {{-- hhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}
    <div class="row d-flex col-lg-12 order-2 order-lg-1 vh-100">
        {{-- sidebar --}}
        <div class="col-md-3 col-sm-2">
            <div class="d-flex flex-column p-3 text-bg-secondary vh-100" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Hi, Admin</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
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
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                            class="rounded-circle me-2">
                        <strong>Admin</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- content --}}
        <div class="col-md-9">
            <div>
                <h1>Detail Data Ibu Hamil</h1>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
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
                                        <div class="row">
                                            <div class="col-md-4">
                                                <form class="" method="POST" action="/input-bumil">
                                                    @csrf
                                                    <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputTanggalPemeriksaan" class="form-label">Tanggal
                                                            Pemeriksaan</label>
                                                        <input type="date" class="form-control"
                                                            id="inputTanggalPemeriksaan" name="tgl_pemeriksaan"
                                                            value="21/21/2024">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-0">
                                                        <label for="inputREG" class="form-label">REG</label>
                                                        <input type="text" class="form-control" id="inputNamaIbu"
                                                            aria-describedby="" value="3403101108020001" name="REG">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-0">
                                                        <label for="inputBukuKIA" class="form-label">Buku KIA</label>
                                                        <input type="checkbox" class="form-check-input" id="inputBukuKIA"
                                                            name="buku_kia" value='1'>
                                                        <input type="hidden" name="buku_kia" value="0">
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNamaIbu" class="form-label">Nama Ibu</label>
                                                        <input type="text" class="form-control" id="inputNamaIbu"
                                                            aria-describedby="" value="Sutinah" name="nama_ibu">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNamaSuami" class="form-label">Nama Suami</label>
                                                        <input type="text" class="form-control" id="inputNamaSuami"
                                                            aria-describedby="" value="Suyanto" name="nama_suami">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNIK_ibu" class="form-label">NIK Ibu</label>
                                                        <input type="text" class="form-control" id="inputNIK_ibu"
                                                            aria-describedby="" value="3403101108020001" name="nik_ibu">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNIK_suami" class="form-label">NIK Suami</label>
                                                        <input type="text" class="form-control" id="inputNIK_suami"
                                                            aria-describedby="" value="3403101108020002"
                                                            name="nik_suami">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>



                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputNoKK" class="form-label">NO KK</label>
                                                    <input type="text" class="form-control" id="inputNoKK"
                                                        aria-describedby="" value="3403101108020000" name="no_kk">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTgl_lahir_ibu" class="form-label">Tanggal Lahir
                                                        Ibu</label>
                                                    <input type="date" class="form-control" id="inputTgl_lahir-ibu"
                                                        aria-describedby="" value="12/12/2024" name="tgl_lahir_ibu">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTgl_lahir_suami" class="form-label">Tanggal Lahir
                                                        Suami</label>
                                                    <input type="date" class="form-control" id="inputTgl_lahir-ibu"
                                                        aria-describedby="" value="12/12/2024" name="tgl_lahir_suami">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="input_pendidikan" class="form-label">Pendidikan Ibu
                                                    </label>
                                                    <input type="text" class="form-control" id="input_pendidikan"
                                                        aria-describedby="" name="pddk_ibu" value="SMA">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="input_pendidikan" class="form-label">Pendidikan
                                                        Suami</label>
                                                    <input type="text" class="form-control" id="input_pendidikan"
                                                        aria-describedby="" name="pddk_suami" value="SMA">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="input_pekerjaan" class="form-label">Pekerjaan Ibu </label>
                                                    <input type="text" class="form-control" id="input_pekerjaan"
                                                        aria-describedby="" name="pekerjaan_ibu" value="Petani">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="input_pekerjaan" class="form-label">Pekerjaan
                                                        Suami</label>
                                                    <input type="text" class="form-control" id="input_pekerjaan"
                                                        aria-describedby="" name="pekerjaan_suami" value="Petani">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputAlamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="inputAlamat"
                                                        aria-describedby="" name="alamat" value="Gunungkidul">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>


                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="input_noHP" class="form-label">No HP / BPJS</label>
                                                    <input type="text" class="form-control" id="input_noHP"
                                                        aria-describedby="" name="no_hp" value="082233334444">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputParitas" class="form-label">Paritas</label>
                                                    <input type="text" class="form-control" id="inputParitas"
                                                        aria-describedby="" name="paritas" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputSpasing" class="form-label">Spasing</label>
                                                    <input type="text" class="form-control" id="inputSpasing"
                                                        aria-describedby="" name="parsing" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputP4K" class="form-label">P4K/Rencana Kelahiran</label>
                                                    <input type="checkbox" class="form-check-input" id="inputP4K"
                                                        name="p4k" value='1' checked>
                                                    <input type="hidden" name="p4k" value="0">
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHPHT" class="form-label">HPHT</label>
                                                    <input type="date" class="form-control" id="inputHPHT"
                                                        aria-describedby="" name="HPPT" value="12/12/2002">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHPL" class="form-label">HPL</label>
                                                    <input type="date" class="form-control" id="inputHPL"
                                                        aria-describedby="" name="HPL" value="12/12/2002">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>


                                                <a class="btn btn-primary next-btn" data-toggle="tab" href="#page2"
                                                    aria-selected="false">Next</a>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- Halaman 2 -->
                                    <div class="tab-pane fade" id="page2" role="tabpanel"
                                        aria-labelledby="page2-tab">
                                        <div class="row">
                                            <div class="col-md-4">

                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputUmurKehamilan" class="form-label">Umur Kehamilan
                                                        (Minggu)</label>
                                                    <input type="text" class="form-control" id="inputUmurKehamilan"
                                                        aria-describedby="" name="umur_kehamilan" value="9+3">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputAnamesaKehamilan" class="form-label">Anamesa
                                                        Kehamilan</label>
                                                    <input type="text" class="form-control" id="inputAnamesaKehamilan"
                                                        aria-describedby="" name="anamnesa" value="batuk">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTinggiBadan" class="form-label">Tinggi Badan</label>
                                                    <input type="text" class="form-control" id="inputTinggiBadan"
                                                        aria-describedby="" name="TB" value="165">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputLILA" class="form-label">LILA</label>
                                                    <input type="text" class="form-control" id="inputLILA"
                                                        aria-describedby="" name="LILA" value="24">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                                    <input type="text" class="form-control" id="inputBeratBadan"
                                                        aria-describedby="" name="BB" value="44">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTFU" class="form-label">TFU</label>
                                                    <input type="text" class="form-control" id="inputTFU"
                                                        aria-describedby="" name="TFU" value="10">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTensi" class="form-label">Tensi</label>
                                                    <input type="text" class="form-control" id="inputTensi"
                                                        aria-describedby="" name="tensi" value="124/80">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTT_K1" class="form-label">Status TT K1</label>
                                                    <input type="text" class="form-control" id="inputTT_K1"
                                                        aria-describedby="" name="status_TT1_K1" value="115">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTM" class="form-label">TM/K1/K4</label>
                                                    <input type="text" class="form-control" id="inputTM"
                                                        aria-describedby="" name="TM" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputFE1" class="form-label">FE1/FE2/FE3</label>
                                                    <input type="text" class="form-control" id="inputFE1"
                                                        aria-describedby="" name="FE" value="80">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="inputBATlain" class="form-label">BAT Lain</label>
                                                    <input type="text" class="form-control" id="inputBATlain"
                                                        aria-describedby="" name="BAT_LAIN" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputPresentasi" class="form-label">Presentasi</label>
                                                    <input type="text" class="form-control" id="inputPresentasi"
                                                        aria-describedby="" name="PRESENTASI" value="100">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>


                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputDJJ" class="form-label">DJJ</label>
                                                    <input type="text" class="form-control" id="inputDJJ"
                                                        aria-describedby="" name="DJJ" value="144">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputKepalaTHD" class="form-label">Kepala THD PAP</label>
                                                    <input type="text" class="form-control" id="inputKepalaTHD"
                                                        aria-describedby="" name="KEPALA_THD_PAP" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTBJ" class="form-label">TBJ</label>
                                                    <input type="text" class="form-control" id="inputTBJ"
                                                        aria-describedby="" name="TBJ" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHB" class="form-label">HB</label>
                                                    <input type="text" class="form-control" id="inputHB"
                                                        aria-describedby="" name="HB" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputProteinUrine" class="form-label">Protein
                                                        Urine</label>
                                                    <input type="text" class="form-control" id="inputProteinUrine"
                                                        aria-describedby="" name="Protein_urine" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                                <a class="btn btn-primary next-btn" data-toggle="tab"
                                                    href="#page3">Next</a>
                                                <a class="btn btn-primary prev-btn" data-toggle="tab"
                                                    href="#page1">Prev</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Halaman 3 -->
                                    <div class="tab-pane fade" id="page3" role="tabpanel"
                                        aria-labelledby="page3-tab">
                                        <div class="row">
                                            <div class="col-md-4">


                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputGoldar" class="form-label">Golongan Darah</label>
                                                    <input type="text" class="form-control" id="inputGoldar"
                                                        aria-describedby="" name="GOLDAR" value="A">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHBsAG" class="form-label">HBsAG</label>
                                                    <input type="text" class="form-control" id="inputHBsAG"
                                                        aria-describedby="" name="HBSAG" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputIMS" class="form-label">IMS</label>
                                                    <input type="text" class="form-control" id="inputIMS"
                                                        aria-describedby="" name="IMS" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHIV" class="form-label">HIV</label>
                                                    <input type="text" class="form-control" id="inputHIV"
                                                        aria-describedby="" name="HIV" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputKomplikasi" class="form-label">Komplikasi</label>
                                                    <div>
                                                        <input type="checkbox" class="form-check-input" id="inputHDK"
                                                            name="HDK" value="1">
                                                        <input type="hidden" name="HDK" value="0">
                                                        <label for="inputKomplikasi" class="form-label">HDK</label>
                                                        <input type="hidden" name="ABORTUS" value="0">
                                                        <input type="checkbox" class="form-check-input" id="inputAbortus"
                                                            name="ABORTUS" value="2">
                                                        <label for="inputKomplikasi" class="form-label">Abortus</label>
                                                        <input type="hidden" name="PERDARAHAN" value="0">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="inputPerdarahan" name="PERDARAHAN" value="3">
                                                        <label for="inputBCG" class="form-label">Perdarahan</label>
                                                        <input type="hidden" name="INFEKSI" value="0">
                                                        <input type="checkbox" class="form-check-input" id="inputInveksi"
                                                            name="INFEKSI" value="4">
                                                        <label for="inputBCG" class="form-label">Infeksi</label>
                                                        <input type="hidden" name="KPD" value="0">
                                                        <input type="checkbox" class="form-check-input" id="inputKPD"
                                                            name="KPD" value="5">
                                                        <label for="inputBCG" class="form-label">KPD</label>


                                                        <label for="inputBCG" class="form-label">lain-lain</label>
                                                        <input type="text" class="form-controll" id="inputlain-lain"
                                                            name="LAIN_LAIN" value="1">
                                                        <input type="hidden" name="Komplikasi" value="0">
                                                    </div>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                            </div>
                                            <div class="col-md-4">

                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="inputRujuk" class="form-label">Rujuk Ke</label>
                                                    <input type="text" class="form-control" id="inputRujuk"
                                                        aria-describedby="" name="RUJUK" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester1" class="form-label">Trimester 1</label>
                                                    <input type="text" class="form-control" id="inputTrimester1"
                                                        aria-describedby="" name="trisemester1" value="1">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester2" class="form-label">Trimester 2</label>
                                                    <input type="text" class="form-control" id="inputTrimester2"
                                                        aria-describedby="" name="trisemester2" value="2">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester3" class="form-label">Trimester 3</label>
                                                    <input type="text" class="form-control" id="inputTrimester3"
                                                        aria-describedby="" name="trisemester3" value="3">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputFR" class="form-label">FR/R</label>
                                                    <input type="text" class="form-control" id="inputFR"
                                                        aria-describedby="" name="FR" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputFR" class="form-label">keterangan</label>
                                                    <input type="text" class="form-control" id="inputFR"
                                                        aria-describedby="" name="keterangan" value="gatau">
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <a class="btn btn-primary" data-toggle="tab" href="#page3"
                                                    aria-selected="true">Prev</a>
                                                <button type="submit" class="btn btn-success">Simpan</button>



                                            </div>
                                            <div class="col-md-4">


                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}
    </div>

    <script>
        $(document).ready(function() {
            // Tombol Next
            $(".next-btn").click(function() {
                $("#page1").hide();
                $("#page2").show();
            });

            // Tombol Previous
            $(".prev-btn").click(function() {
                $("#page2").hide();
                $("#page1").show();
            });
        });
    </script>
