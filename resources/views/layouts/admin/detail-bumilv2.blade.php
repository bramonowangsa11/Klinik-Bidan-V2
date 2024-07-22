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
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Logout
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
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        {{-- biodata --}}
                        <div class="">
                            <h6>Tanggal Pemeriksaan</h6>
                            <h6>Buku KIA</h6>
                            <h6>Nama Ibu</h6>
                            <h6>NIK Ibu</h6>
                            <h6>Tanggal Lahir Ibu</h6>
                            <h6>Umur Ibu</h6>
                            <h6>Pendidikan Ibu</h6>
                            <h6>Pekerjaan Ibu</h6>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="">
                            <h6>: {{ $ancs->tgl_pemeriksaan }}</h6>
                            <h6>: Ada</h6>
                            <h6>: {{ $ancs->nama_ibu }}</h6>
                            <h6>: {{ $ancs->nik_ibu }}</h6>
                            <h6>: {{ $ancs->tgl_lahir_ibu }}</h6>
                            <h6>: 26</h6>
                            <h6>: {{ $ancs->pddk_ibu }}</h6>
                            <h6>: Petani</h6>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div>

                            <h6>Nama Suami</h6>
                            <h6>NIK Suami</h6>
                            <h6>No KK</h6>
                            <h6>Alamat</h6>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <h6>: Yanto</h6>
                        <h6>: {{ $ancs->nik_suami }}</h6>
                        <h6>: 3403101108020000</h6>
                        <h6>: {{ $ancs->alamat }}</h6>

                    </div>



                </div>
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
                                        <div class="">
                                            <div class="col-md-5">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Paritas</th>
                                                            <th>Spasing</th>
                                                            <th>P4K/Rencana Kelahiran</th>
                                                            <th>HPHT</th>
                                                            <th>HPL</th>
                                                            <th>Umur Kehamilan (Minggu)</th>
                                                            <th>Anamesa Kehamilan</th>
                                                            <th>Tinggi Badan</th>
                                                            <th>LILA</th>
                                                            <th>Berat Badan</th>
                                                            <th>TFU</th>

                                                        </tr>


                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $ancs->paritas }}</td>
                                                            <td>{{ $ancs->parsing }}</td>
                                                            <td>{{ $ancs->p4k }}</td>
                                                            <td>{{ $ancs->HPPT }}</td>
                                                            <td>{{ $ancs->HPL }}</td>
                                                            <td>{{ $ancs->umur_kehamilan }}</td>
                                                            <td>{{ $ancs->anamnesa }}</td>
                                                            <td>{{ $ancs->TB }}</td>
                                                            <td>{{ $ancs->LILA }}</td>
                                                            <td>{{ $ancs->BB }}</td>
                                                            <td>{{ $ancs->TFU }}</td>

                                                        </tr>
                                                    </tbody>



                                                </table>




                                            </div>
                                            <div class="col-md-4">



                                            </div>
                                            <div class="col-md-4">



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
                                                        aria-describedby="" name="umur_keehamilan"
                                                        value="{{ $ancs->umur_kehamilan }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputAnamesaKehamilan" class="form-label">Anamesa
                                                        Kehamilan</label>
                                                    <input type="text" class="form-control" id="inputAnamesaKehamilan"
                                                        aria-describedby="" name="anamesa_kehamilan"
                                                        value="{{ $ancs->anamnesa }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTinggiBadan" class="form-label">Tinggi Badan</label>
                                                    <input type="text" class="form-control" id="inputTinggiBadan"
                                                        aria-describedby="" name="tinggi_badan"
                                                        value="{{ $ancs->TB }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputLILA" class="form-label">LILA</label>
                                                    <input type="text" class="form-control" id="inputLILA"
                                                        aria-describedby="" name="LILA" value="{{ $ancs->LILA }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                                    <input type="text" class="form-control" id="inputBeratBadan"
                                                        aria-describedby="" name="berat_badan"
                                                        value="{{ $ancs->BB }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTFU" class="form-label">TFU</label>
                                                    <input type="text" class="form-control" id="inputTFU"
                                                        aria-describedby="" name="TFU" value="{{ $ancs->TFU }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTensi" class="form-label">Tensi</label>
                                                    <input type="text" class="form-control" id="inputTensi"
                                                        aria-describedby="" name="tensi" value="{{ $ancs->tensi }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTT_K1" class="form-label">Status TT K1</label>
                                                    <input type="text" class="form-control" id="inputTT_K1"
                                                        aria-describedby="" name="TT_K1"
                                                        value="{{ $ancs->status_TT1_K1 }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTM" class="form-label">TM/K1/K4</label>
                                                    <input type="text" class="form-control" id="inputTM"
                                                        aria-describedby="" name="TM" value="{{ $ancs->TM }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputFE1" class="form-label">FE1/FE2/FE3</label>
                                                    <input type="text" class="form-control" id="inputFE1"
                                                        aria-describedby="" name="FE1" value="{{ $ancs->FE }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="inputBATlain" class="form-label">BAT Lain</label>
                                                    <input type="text" class="form-control" id="inputBATlain"
                                                        aria-describedby="" name="BATlain" value="{{ $ancs->BAT_LAIN }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputPresentasi" class="form-label">Presentasi</label>
                                                    <input type="text" class="form-control" id="inputPresentasi"
                                                        aria-describedby="" name="Presentasi"
                                                        value="{{ $ancs->PRESENTASI }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>


                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputDJJ" class="form-label">DJJ</label>
                                                    <input type="text" class="form-control" id="inputDJJ"
                                                        aria-describedby="" name="DJJ" value="{{ $ancs->djj }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputKepalaTHD" class="form-label">Kepala THD PAP</label>
                                                    <input type="text" class="form-control" id="inputKepalaTHD"
                                                        aria-describedby="" name="KepalaTHD"
                                                        value="{{ $ancs->KEPALA_THD_PAP }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTBJ" class="form-label">TBJ</label>
                                                    <input type="text" class="form-control" id="inputTBJ"
                                                        aria-describedby="" name="TBJ" value="{{ $ancs->TBJ }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHB" class="form-label">HB</label>
                                                    <input type="text" class="form-control" id="inputHB"
                                                        aria-describedby="" name="HB" value="{{ $ancs->HB }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputProteinUrine" class="form-label">Protein
                                                        Urine</label>
                                                    <input type="text" class="form-control" id="inputProteinUrine"
                                                        aria-describedby="" name="ProteinUrine"
                                                        value="{{ $ancs->Protein_urine }}" disabled>
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
                                                        aria-describedby="" name="Goldar" value="{{ $ancs->GOLDAR }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHBsAG" class="form-label">HBsAG</label>
                                                    <input type="text" class="form-control" id="inputHBsAG"
                                                        aria-describedby="" name="HbsAG" value="{{ $ancs->HBSAG }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputIMS" class="form-label">IMS</label>
                                                    <input type="text" class="form-control" id="inputIMS"
                                                        aria-describedby="" name="IMS" value="{{ $ancs->IMS }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHIV" class="form-label">HIV</label>
                                                    <input type="text" class="form-control" id="inputHIV"
                                                        aria-describedby="" name="HIV" value="{{ $ancs->HIV }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputKomplikasi" class="form-label">Komplikasi</label>
                                                    <div>
                                                        <input type="checkbox" class="form-check-input" id="inputHDK"
                                                            name="HDK" {{ $ancs->HDK == 1 ? 'checked' : '' }}>
                                                        <label for="inputKomplikasi" class="form-label">HDK</label>
                                                        <input type="checkbox" class="form-check-input" id="inputAbortus"
                                                            name="Abortus" {{ $ancs->ABORTUS == 1 ? 'checked' : '' }}>
                                                        <label for="inputKomplikasi" class="form-label">Abortus</label>
                                                        <input type="checkbox" class="form-check-input"
                                                            id="inputPerdarahan" name="Perdarahan"
                                                            {{ $ancs->PERDARAHAN == 1 ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">Perdarahan</label>
                                                        <input type="checkbox" class="form-check-input" id="inputInveksi"
                                                            name="Inveksi" {{ $ancs->INFEKSI == 1 ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">Infeksi</label>
                                                        <input type="checkbox" class="form-check-input" id="inputKPD"
                                                            name="KPD" {{ $ancs->KPD == 1 ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">KPD</label>
                                                        <input type="checkbox" class="form-check-input"
                                                            id="inputlain-lain" name="lain-lain"
                                                            {{ $ancs->p4k == 1 ? 'checked' : '' }}>
                                                        <label for="inputBCG" class="form-label">lain-lain</label>
                                                        <input type="text" class="form-control" id="inputHIV"
                                                            aria-describedby="" name="HIV"
                                                            value="{{ $ancs->LAIN_LAIN }}" disabled>
                                                    </div>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                            </div>
                                            <div class="col-md-4">

                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="inputRujuk" class="form-label">Rujuk Ke</label>
                                                    <input type="text" class="form-control" id="inputRujuk"
                                                        aria-describedby="" name="Rujuk" value="{{ $ancs->RUJUK }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester1" class="form-label">Trimester 1</label>
                                                    <input type="text" class="form-control" id="inputTrimester1"
                                                        aria-describedby="" name="Trimester1"
                                                        value="{{ $ancs->trisemester1 }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester2" class="form-label">Trimester 2</label>
                                                    <input type="text" class="form-control" id="inputTrimester2"
                                                        aria-describedby="" name="Trimester2"
                                                        value="{{ $ancs->trisemester2 }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester3" class="form-label">Trimester 3</label>
                                                    <input type="text" class="form-control" id="inputTrimester3"
                                                        aria-describedby="" name="Trimester3"
                                                        value="{{ $ancs->trisemester3 }}" disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputFR" class="form-label">FR/R</label>
                                                    <input type="text" class="form-control" id="inputFR"
                                                        aria-describedby="" name="FR" value="{{ $ancs->FR }}"
                                                        disabled>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <a class="btn btn-primary" data-toggle="tab" href="#page3"
                                                    aria-selected="true">Prev</a>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#ubahModal">Edit</button>
                                                <form action="{{ route('bumil.delete', $ancs->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>



                                            </div>
                                            <div class="col-md-4">


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- Modal ubah-->
                <div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Isi detail data disini -->
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <ul class="nav nav-tabs card-header-tabs" id="myTab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="halaman1-tab"
                                                                data-toggle="tab" href="#halaman1" role="tab"
                                                                aria-controls="halaman1" aria-selected="true">Halaman
                                                                1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="halaman2-tab" data-toggle="tab"
                                                                href="#halaman2" role="tab" aria-controls="halaman2"
                                                                aria-selected="true">Halaman 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="halaman3-tab" data-toggle="tab"
                                                                href="#halaman3" role="tab" aria-controls="halaman3"
                                                                aria-selected="true">Halaman 3</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="myTabContent">
                                                        <!-- Halaman 1 -->
                                                        <div class="tab-pane fade show active" id="halaman1"
                                                            role="tabpanel" aria-labelledby="halaman1-tab">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <form class="" method="POST"
                                                                        action="{{ route('bumil.update', $ancs->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div
                                                                            class="mb-2 form-outline border-0 border-bottom border-dark">
                                                                            <label for="inputTanggalPemeriksaan"
                                                                                class="form-label">Tanggal
                                                                                Pemeriksaan</label>
                                                                            <input type="date" class="form-control"
                                                                                id="inputTanggalPemeriksaan"
                                                                                name="tgl_pemeriksaan"
                                                                                value="{{ $ancs->tgl_pemeriksaan }}">
                                                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                        </div>
                                                                        <div class="mb-0">
                                                                            <label for="inputREG"
                                                                                class="form-label">REG</label>
                                                                            <div>
                                                                                <input type="text"
                                                                                    class="form-controll" id="inputREG"
                                                                                    name="REG"
                                                                                    value="{{ $ancs->REG }}" checked>
                                                                            </div>
                                                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                        </div>
                                                                        <div class="mb-0">
                                                                            <label for="inputBukuKIA"
                                                                                class="form-label">Buku KIA</label>
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="inputBukuKIA"
                                                                                name="buku_kia" value='1'
                                                                                {{ $ancs->buku_kia ? 'checked' : '' }}>
                                                                            <input type="hidden" name="bukuKIA"
                                                                                value="0">
                                                                        </div>
                                                                        <div
                                                                            class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                            <label for="inputNamaIbu"
                                                                                class="form-label">Nama Ibu</label>
                                                                            <input type="text" class="form-control"
                                                                                id="inputNamaIbu" aria-describedby=""
                                                                                value="{{ $ancs->nama_ibu }}"
                                                                                name="nama_ibu">
                                                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                        </div>
                                                                        <div
                                                                            class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                            <label for="inputNamaSuami"
                                                                                class="form-label">Nama Suami</label>
                                                                            <input type="text" class="form-control"
                                                                                id="inputNamaSuami" aria-describedby=""
                                                                                value="{{ $ancs->nama_suami }}"
                                                                                name="nama_suami">
                                                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                        </div>
                                                                        <div
                                                                            class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                            <label for="inputNIK_ibu"
                                                                                class="form-label">NIK Ibu</label>
                                                                            <input type="text" class="form-control"
                                                                                id="inputNIK_ibu" aria-describedby=""
                                                                                value="{{ $ancs->nik_ibu }}"
                                                                                name="nik_ibu">
                                                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                        </div>
                                                                        <div
                                                                            class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                            <label for="inputNIK_suami"
                                                                                class="form-label">NIK Suami</label>
                                                                            <input type="text" class="form-control"
                                                                                id="inputNIK_suami" aria-describedby=""
                                                                                value="{{ $ancs->nik_suami }}"
                                                                                name="nik_suami">
                                                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                        </div>



                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputNoKK" class="form-label">NO
                                                                            KK</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputNoKK" aria-describedby=""
                                                                            value="{{ $ancs->no_kk }}" name="no_kk">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTgl_lahir_ibu"
                                                                            class="form-label">Tanggal Lahir Ibu </label>
                                                                        <input type="date" class="form-control"
                                                                            id="inputTgl_lahir-ibu" aria-describedby=""
                                                                            value="{{ $ancs->tgl_lahir_ibu }}"
                                                                            name="tgl_lahir_ibu">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTgl_lahir_ibu"
                                                                            class="form-label">Tanggal Lahir Suami</label>
                                                                        <input type="date" class="form-control"
                                                                            id="inputTgl_lahir-ibu" aria-describedby=""
                                                                            value="{{ $ancs->tgl_lahir_suami }}"
                                                                            name="tgl_lahir_suami">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>

                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                                        <label for="input_pendidikan"
                                                                            class="form-label">Pendidikan Ibu</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input_pendidikan" aria-describedby=""
                                                                            name="pddk_ibu"
                                                                            value="{{ $ancs->pddk_ibu }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                                        <label for="input_pendidikan"
                                                                            class="form-label">Pendidikan Suami</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input_pendidikan" aria-describedby=""
                                                                            name="pddk_suami"
                                                                            value="{{ $ancs->pddk_suami }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="input_pekerjaan"
                                                                            class="form-label">Pekerjaan Ibu </label>
                                                                        <input type="text" class="form-control"
                                                                            id="input_pekerjaan" aria-describedby=""
                                                                            name="pekerjaan_ibu"
                                                                            value="{{ $ancs->pekerjaan_ibu }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="input_pekerjaan"
                                                                            class="form-label">Pekerjaan Suami</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input_pekerjaan" aria-describedby=""
                                                                            name="pekerjaan_ayah"
                                                                            value="{{ $ancs->pekerjaan_suami }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputAlamat"
                                                                            class="form-label">Alamat</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputAlamat" aria-describedby=""
                                                                            name="alamat" value="{{ $ancs->alamat }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>


                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="input_noHP" class="form-label">No HP /
                                                                            BPJS</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input_noHP" aria-describedby=""
                                                                            name="no_hp" value="{{ $ancs->no_hp }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputParitas"
                                                                            class="form-label">Paritas</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputParitas" aria-describedby=""
                                                                            name="paritas" value="{{ $ancs->paritas }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputSpasing"
                                                                            class="form-label">Spasing</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputSpasing" aria-describedby=""
                                                                            name="parsing" value="{{ $ancs->parsing }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="inputP4K"
                                                                            class="form-label">P4K/Rencana
                                                                            Kelahiran</label>
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="inputP4K" name="p4k" value='1'
                                                                            {{ $ancs->p4k ? 'checked' : '' }}>
                                                                        <input type="hidden" name="p4k"
                                                                            value="0">
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputHPHT"
                                                                            class="form-label">HPHT</label>
                                                                        <input type="date" class="form-control"
                                                                            id="inputHPHT" aria-describedby=""
                                                                            name="HPPT" value="{{ $ancs->HPPT }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputHPL"
                                                                            class="form-label">HPL</label>
                                                                        <input type="date" class="form-control"
                                                                            id="inputHPL" aria-describedby=""
                                                                            name="HPL" value="{{ $ancs->HPL }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>


                                                                    <a class="btn btn-primary next-btn" data-toggle="tab"
                                                                        href="#page2" aria-selected="false">Next</a>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- Halaman 2 -->
                                                        <div class="tab-pane fade" id="halaman2" role="tabpanel"
                                                            aria-labelledby="halaman2-tab">
                                                            <div class="row">
                                                                <div class="col-md-4">

                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputUmurKehamilan"
                                                                            class="form-label">Umur Kehamilan
                                                                            (Minggu)</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputUmurKehamilan" aria-describedby=""
                                                                            name="umur_kehamilan"
                                                                            value="{{ $ancs->umur_kehamilan }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputAnamesaKehamilan"
                                                                            class="form-label">Anamesa Kehamilan</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputAnamesaKehamilan" aria-describedby=""
                                                                            name="anamnesa"
                                                                            value="{{ $ancs->anamnesa }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTinggiBadan"
                                                                            class="form-label">Tinggi Badan</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTinggiBadan" aria-describedby=""
                                                                            name="TB" value="{{ $ancs->TB }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputLILA"
                                                                            class="form-label">LILA</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputLILA" aria-describedby=""
                                                                            name="LILA" value="{{ $ancs->LILA }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputBeratBadan"
                                                                            class="form-label">Berat Badan</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputBeratBadan" aria-describedby=""
                                                                            name="BB" value="{{ $ancs->BB }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTFU"
                                                                            class="form-label">TFU</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTFU" aria-describedby=""
                                                                            name="TFU" value="{{ $ancs->TFU }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTensi"
                                                                            class="form-label">Tensi</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTensi" aria-describedby=""
                                                                            name="tensi" value="{{ $ancs->tensi }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTT_K1" class="form-label">Status
                                                                            TT K1</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTT_K1" aria-describedby=""
                                                                            name="status_TT1_K1"
                                                                            value="{{ $ancs->status_TT1_K1 }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTM"
                                                                            class="form-label">TM/K1/K4</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTM" aria-describedby=""
                                                                            name="TM" value="{{ $ancs->TM }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputFE1"
                                                                            class="form-label">FE1/FE2/FE3</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputFE1" aria-describedby=""
                                                                            name="FE" value="{{ $ancs->FE }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                                        <label for="inputBATlain" class="form-label">BAT
                                                                            Lain</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputBATlain" aria-describedby=""
                                                                            name="BAT_LAIN"
                                                                            value="{{ $ancs->BAT_LAIN }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputPresentasi"
                                                                            class="form-label">Presentasi</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputPresentasi" aria-describedby=""
                                                                            name="PRESENTASI"
                                                                            value="{{ $ancs->PRESENTASI }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>


                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputDJJ"
                                                                            class="form-label">DJJ</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputDJJ" aria-describedby=""
                                                                            name="DJJ" value="{{ $ancs->DJJ }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputKepalaTHD"
                                                                            class="form-label">Kepala THD PAP</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputKepalaTHD" aria-describedby=""
                                                                            name="KEPALA_THD_PAP"
                                                                            value="{{ $ancs->KEPALA_THD_PAP }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTBJ"
                                                                            class="form-label">TBJ</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTBJ" aria-describedby=""
                                                                            name="TBJ" value="{{ $ancs->TBJ }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputHB"
                                                                            class="form-label">HB</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputHB" aria-describedby=""
                                                                            name="HB" value="{{ $ancs->HB }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputProteinUrine"
                                                                            class="form-label">Protein Urine</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputProteinUrine" aria-describedby=""
                                                                            name="Protein_urine"
                                                                            value="{{ $ancs->Protein_urine }}">
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
                                                        <div class="tab-pane fade" id="halaman3" role="tabpanel"
                                                            aria-labelledby="halaman3-tab">
                                                            <div class="row">
                                                                <div class="col-md-4">

                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputGoldar"
                                                                            class="form-label">Golongan Darah</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputGoldar" aria-describedby=""
                                                                            name="GOLDAR" value="{{ $ancs->GOLDAR }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputHBsAG"
                                                                            class="form-label">HBsAG</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputHBsAG" aria-describedby=""
                                                                            name="HBSAG" value="{{ $ancs->HBSAG }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputIMS"
                                                                            class="form-label">IMS</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputIMS" aria-describedby=""
                                                                            name="IMS" value="{{ $ancs->IMS }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputHIV"
                                                                            class="form-label">HIV</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputHIV" aria-describedby=""
                                                                            name="HIV" value="{{ $ancs->HIV }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="inputKomplikasi"
                                                                            class="form-label">Komplikasi</label>
                                                                        <div>
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="inputHDK"
                                                                                name="HDK" value="1"
                                                                                {{ $ancs->HDK ? 'checked' : '' }}>
                                                                            <input type="hidden" name="HDK"
                                                                                value="0">
                                                                            <label for="inputKomplikasi"
                                                                                class="form-label">HDK</label>
                                                                            <input type="hidden" name="ABORTUS"
                                                                                value="0">
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="inputAbortus"
                                                                                name="ABORTUS" value="1"
                                                                                {{ $ancs->ABORTUS ? 'checked' : '' }}>
                                                                            <label for="inputKomplikasi"
                                                                                class="form-label">Abortus</label>
                                                                            <input type="hidden" name="PERDARAHAN"
                                                                                value="0">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="inputPerdarahan" name="PERDARAHAN"
                                                                                value="1"
                                                                                {{ $ancs->PERDARAHAN ? 'checked' : '' }}>
                                                                            <label for="inputBCG"
                                                                                class="form-label">Perdarahan</label>
                                                                            <input type="hidden" name="INFEKSI"
                                                                                value="0">
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="inputInveksi"
                                                                                name="INFEKSI" value="1"
                                                                                {{ $ancs->INFEKSI ? 'checked' : '' }}>
                                                                            <label for="inputBCG"
                                                                                class="form-label">Infeksi</label>
                                                                            <input type="hidden" name="KPD"
                                                                                value="0">
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="inputKPD"
                                                                                name="KPD" value="1"
                                                                                {{ $ancs->KDP ? 'checked' : '' }}>
                                                                            <label for="inputBCG"
                                                                                class="form-label">KPD</label>


                                                                            <label for="inputBCG"
                                                                                class="form-label">lain-lain</label>
                                                                            <input type="text" class="form-controll"
                                                                                id="inputlain-lain" name="LAIN_LAIN"
                                                                                value="{{ $ancs->LAIN_LAIN }}">
                                                                            <input type="hidden" name="Komplikasi"
                                                                                value="0">
                                                                        </div>
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-4">

                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                                        <label for="inputRujuk" class="form-label">Rujuk
                                                                            Ke</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputRujuk" aria-describedby=""
                                                                            name="RUJUK" value="{{ $ancs->RUJUK }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTrimester1"
                                                                            class="form-label">Trimester 1</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTrimester1" aria-describedby=""
                                                                            name="trisemester1"
                                                                            value="{{ $ancs->trisemester1 }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTrimester2"
                                                                            class="form-label">Trimester 2</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTrimester2" aria-describedby=""
                                                                            name="trisemester2"
                                                                            value="{{ $ancs->trisemester2 }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputTrimester3"
                                                                            class="form-label">Trimester 3</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputTrimester3" aria-describedby=""
                                                                            name="trisemester3"
                                                                            value="{{ $ancs->trisemester3 }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputFR"
                                                                            class="form-label">FR/R</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputFR" aria-describedby=""
                                                                            name="FR"
                                                                            value="{{ $ancs->FR }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 form-outline border-0 border-bottom border-dark">
                                                                        <label for="inputFR"
                                                                            class="form-label">keterangan</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputFR" aria-describedby=""
                                                                            name="keterangan"
                                                                            value="{{ $ancs->keterangan }}">
                                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                                    </div>
                                                                    <a class="btn btn-primary" data-toggle="tab"
                                                                        href="#page3" aria-selected="true">Prev</a>



                                                                </div>
                                                                <div class="col-md-4">


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal ubah --}}
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
