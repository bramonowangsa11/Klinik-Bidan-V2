@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="row w-full vh-100">
        {{-- sidebar --}}
        <div class="col-md-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-secondary vh-100" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Hi, Admin</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link text-white active" aria-current="page">
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
        {{-- end side bar --}}
        {{-- content --}}
        <div class="col-md-9">
            <div>
                <h1>Detail Tabel</h1>
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
            <form action="{{ route('imunisasi.update', $imunisasi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        {{-- kiri --}}
                        <div class="col-md-3 mt-lg-5">
                            {{-- biodata --}}
                            <h5>Tanggal</h5>
                            <h5>Nama Anak</h5>
                            <h5>NIK</h5>
                            <h5>Nama Orang Tua</h5>
                            <h5>Tanggal Lahir</h5>
                            <h5>Alamat</h5>

                            {{-- isi biodata --}}

                        </div>
                        {{-- tengah --}}
                        <div class="col-md-9 mt-lg-5">
                            <h5>: {{ $imunisasi->tanggal }}</h5>
                            <h5>: {{ $imunisasi->Anak->name }}</h5>
                            <h5>: {{ $imunisasi->Anak->nik}}</h5>
                            <h5>: {{ $imunisasi->Ortu->name}}</h5>
                            <h5>: {{ $imunisasi->Anak->ttl }}</h5>
                            <h5>: {{ $imunisasi->Ortu->alamat }}</h5>




                        </div>
                        {{-- kanan --}}
                        <div class="col-md-9">
                            <table class="table border-black border-2 table-bordered">
                                <thead>
                                    <tr>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>HBO</th>
                                        <th>BCG</th>
                                        <th>Penta</th>
                                        <th>IPV</th>
                                        <th>PCV</th>
                                        <th>Rota Virus</th>
                                        <th>MK</th>
                                        <th>Booster</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $imunisasi->berat_badan }}</td>
                                        <td>{{ $imunisasi->panjang_badan }}</td>
                                        <td>{{ $imunisasi->HBO }}</td>
                                        <td>{{ $imunisasi->BCG }}</td>
                                        <td>{{ $imunisasi->PENTA }}</td>
                                        <td>{{ $imunisasi->IPV }}</td>
                                        <td>{{ $imunisasi->PCV }}</td>
                                        <td>{{ $imunisasi->ROTA_VIRUS }}</td>
                                        <td>{{ $imunisasi->MK }}</td>
                                        <td>{{ $imunisasi->booster }}</td>

                                    </tr>
                                </tbody>
                            </table>



                            <div class=" mb-3">
                                <div class="row">
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#ubahModal">Ubah</button>
            </form>
        </div>
        <div class="col-md-1 ms-4">
            <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>


    {{-- <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal">Detail</button> --}}
    </div>
    </div>
    </div>



    {{-- modal --}}


    <!-- Modal ubah-->
    <div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        {{-- kiri --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputN0" class="form-label">No</label>
                                <input type="text" class="form-control" id="inputNo" readonly value="1">
                            </div>
                            <div class="mb-3">
                                <label for="inputTanggal" class="form-label">Tanggal</label>
                                <input type="text" class="form-control" id="inputTanggal" readonly
                                    value="10/03/2024">
                            </div>
                            <div class="mb-3">
                                <label for="inputNamaAnak" class="form-label">Nama Anak</label>
                                <input type="text" class="form-control" id="inputNamaAnak" readonly value="Doley">
                            </div>
                            <div class="mb-3">
                                <label for="inputNIK" class="form-label">NIK</label>
                                <input type="number" class="form-control" id="inputNIK" readonly
                                    value="3403101108020005">
                            </div>
                            <div class="mb-3">
                                <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
                                <input type="text" class="form-control" id="inputNamaOrtu" readonly value="Wahyu">
                            </div>
                            <div class="mb-3">
                                <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="inputTglLahir" readonly
                                    value="11/04/2024">
                            </div>
                        </div>
                        {{-- tengah --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputAlamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="inputAlamat" readonly value="Sanggrahan">
                            </div>
                            <div class="mb-3">
                                <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                <input type="number" class="form-control" id="inputBeratBadan" readonly value="20">
                            </div>
                            <div class="mb-4">
                                <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
                                <input type="number" class="form-control" id="inputPanjangBadan" readonly
                                    value="150">
                            </div>
                            <div class="mb-3">
                                <label for="inputBCG" class="form-label">HBO</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                                    <label for="inputBCG" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                                    <label for="inputBCG" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                                    <label for="inputBCG" class="form-label">3</label>
                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="inputBCG" class="form-label">BCG</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                                    <label for="inputBCG" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                                    <label for="inputBCG" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                                    <label for="inputBCG" class="form-label">3</label>
                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="inputPenta" class="form-label">Penta</label>
                                <input type="number" class="form-control" id="inputPenta" readonly value="1">
                            </div>

                        </div>
                        {{-- kanan --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputTPV" class="form-label">TPV</label>
                                <input type="number" class="form-control" id="inputTPV" readonly value="2">
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="inputTPV" class="form-label">PCV</label>
                                <input type="text" class="form-control" id="inputTPV">
                            </div>
                            <div class="mb-3">
                                <label for="inputBCG" class="form-label">Rota Virus</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                                    <label for="inputBCG" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                                    <label for="inputBCG" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                                    <label for="inputBCG" class="form-label">3</label>
                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="inputTPV" class="form-label">MK</label>
                                <input type="checkbox" class="form-check-input" id="inputTPV">
                            </div>
                            <div class="mb-2">
                                <label for="inputTPV" class="form-label">Booster</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputTPV">
                                    <label for="inputTPV" class="form-label">Penta</label>
                                    <input type="checkbox" class="form-check-input" id="inputTPV">
                                    <label for="inputTPV" class="form-label">MK</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputTPV" class="form-label">Time Stamp</label>
                                <input type="time" class="form-control" id="inputTPV">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>

                    </div>
                    <!-- Isi detail data disini -->


                </div>
            </div>
        </div>
    </div>
    {{-- end modal ubah --}}




    </div>
    </div>
    {{-- end --}}
    </div>
