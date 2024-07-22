@extends('layouts.admin.navbar')
@section('main-content')
    <div class="mt-0 ms-2">
        <h1>Detail Data Ibu Hamil</h1>
    </div>
    {{-- alert --}}
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
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            {{-- end alert --}}
    <div class="container ms-0">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1" role="tab"
                                    aria-controls="page1" aria-selected="true">Halaman 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab"
                                    aria-controls="page2" aria-selected="true">Halaman 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3" role="tab"
                                    aria-controls="page3" aria-selected="true">Halaman 3</a>
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
                                            <input type="text" hidden name="id_suami" value="{{ $suami->id }}">
                                            <input type="text" hidden name="id_istri" value="{{ $istri->id }}">
                                            <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                                <label for="inputTanggalPemeriksaan" class="form-label">Tanggal
                                                    Pemeriksaan</label>
                                                <input type="date" class="form-control" id="inputTanggalPemeriksaan"
                                                    name="tgl_pemeriksaan" value="{{old('tgl_pemeriksaan')}}">
                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputREG" class="form-label">REG</label>
                                                <input type="text" class="form-control" id="inputNamaIbu"
                                                    aria-describedby="" name="REG">
                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                            </div>
                                            <div class="mb-1">
                                                <label for="inputBukuKIA" class="form-label">Buku KIA</label>
                                                <input type="checkbox" class="form-check-input" id="inputBukuKIA"
                                                    name="buku_kia" value='1'>
                                                <input type="hidden" name="buku_kia" value="{{old('buku_kia')}}">
                                            </div>
                                            <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                                <label for="inputNamaIbu" class="form-label">Nama Ibu</label>
                                                <input type="text" class="form-control" id="inputNamaIbu"
                                                    aria-describedby="" value="{{ $istri->name }}" name="nama_ibu"
                                                    readonly>
                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                            </div>
                                            <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                                <label for="inputNamaSuami" class="form-label">Nama
                                                    Suami</label>
                                                <input type="text" class="form-control" id="inputNamaSuami"
                                                    aria-describedby="" value="{{ $suami->name }}" readonly
                                                    name="nama_suami">
                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                            </div>
                                            <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                                <label for="inputNIK_ibu" class="form-label">NIK Ibu</label>
                                                <input type="text" class="form-control" id="inputNIK_ibu"
                                                    aria-describedby="" value="{{ $istri->nik }}" readonly
                                                    name="nik_ibu">
                                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputNIK_suami" class="form-label">NIK
                                                Suami</label>
                                            <input type="text" class="form-control" id="inputNIK_suami"
                                                aria-describedby="" value="{{ $suami->nik }}" readonly
                                                name="nik_suami">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-4 form-outline border-0 border-bottom border-dark">
                                            <label for="inputNoKK" class="form-label">NO KK</label>
                                            <input type="text" class="form-control" id="inputNoKK"
                                                aria-describedby="" name="no_kk" value="{{old('no_kk')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTgl_lahir_ibu" class="form-label">Tanggal Lahir
                                                Ibu</label>
                                            <input type="date" class="form-control" id="inputTgl_lahir-ibu"
                                                aria-describedby="" value="{{ $istri->ttl }}" name="tgl_lahir_ibu"
                                                readonly>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTgl_lahir_suami" class="form-label">Tanggal Lahir
                                                Suami</label>
                                            <input type="date" class="form-control" id="inputTgl_lahir-ibu"
                                                aria-describedby="" value="{{ $suami->ttl }}" name="tgl_lahir_suami"
                                                readonly>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                            <label for="input_pendidikan" class="form-label">Pendidikan Ibu
                                            </label>
                                            <input type="text" class="form-control" id="input_pendidikan"
                                                aria-describedby="" name="pddk_ibu" value="{{old('pddk_ibu')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                            <label for="input_pendidikan" class="form-label">Pendidikan
                                                Suami</label>
                                            <input type="text" class="form-control" id="input_pendidikan"
                                                aria-describedby="" name="pddk_suami" value="{{old('pddk_suami')}}">
                                            ` {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="input_pekerjaan" class="form-label">Pekerjaan Ibu
                                            </label>
                                            <input type="text" class="form-control" id="input_pekerjaan"
                                                aria-describedby="" name="pekerjaan_ibu" value="{{old('pekerjaan_ibu')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="input_pekerjaan" class="form-label">Pekerjaan
                                                Suami</label>
                                            <input type="text" class="form-control" id="input_pekerjaan"
                                                aria-describedby="" name="pekerjaan_suami" value="{{old('pekerjaan_suami')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputAlamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="inputAlamat"
                                                aria-describedby="" name="alamat" value="{{ $suami->alamat }}"
                                                readonly>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="input_noHP" class="form-label">No HP </label>
                                            <input type="text" class="form-control" id="input_noHP"
                                                aria-describedby="" name="no_hp" value="{{ $suami->no_telp }}"
                                                readonly>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>

                                        {{-- <a class="btn btn-primary" data-toggle="tab" href="#page2" id="nextButton" onclick="loca">Next</a> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Halaman 2 -->
                            <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputParitas" class="form-label">Paritas</label>
                                            <input type="text" class="form-control" id="inputParitas"
                                                aria-describedby="" name="paritas" value="{{old('paritas')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputSpasing" class="form-label">Spasing</label>
                                            <input type="text" class="form-control" id="inputSpasing"
                                                aria-describedby="" name="parsing" value="{{old('parsing')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-1">
                                            <label for="inputP4K" class="form-label">P4K/Rencana
                                                Kelahiran</label>
                                            <input type="checkbox" class="form-check-input" id="inputP4K"
                                                name="p4k" value='1' checked>
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputHPHT" class="form-label">HPHT</label>
                                            <input type="date" class="form-control" id="inputHPHT"
                                                aria-describedby="" name="HPPT" value="{{old('HPPT')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputHPL" class="form-label">HPL</label>
                                            <input type="date" class="form-control" id="inputHPL"
                                                aria-describedby="" name="HPL" value="{{old('HPL')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputUmurKehamilan" class="form-label">Umur Kehamilan
                                                (Minggu)</label>
                                            <input type="text" class="form-control" id="inputUmurKehamilan"
                                                aria-describedby="" name="umur_kehamilan" value="{{old('umur_kehamilan')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputAnamesaKehamilan" class="form-label">Anamesa
                                                Kehamilan</label>
                                            <input type="text" class="form-control" id="inputAnamesaKehamilan"
                                                aria-describedby="" name="anamnesa" value="{{old('anamnesa')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTinggiBadan" class="form-label">Tinggi
                                                Badan</label>
                                            <input type="text" class="form-control" id="inputTinggiBadan"
                                                aria-describedby="" name="TB" value="{{old('TB')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputLILA" class="form-label">LILA</label>
                                            <input type="text" class="form-control" id="inputLILA"
                                                aria-describedby="" name="LILA" value="{{old('LILA')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputBeratBadan" class="form-label">Berat
                                                Badan</label>
                                            <input type="text" class="form-control" id="inputBeratBadan"
                                                aria-describedby="" name="BB" value="{{old('BB')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTFU" class="form-label">TFU</label>
                                            <input type="text" class="form-control" id="inputTFU"
                                                aria-describedby="" name="TFU" value="{{old('TFU')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTensi" class="form-label">Tensi</label>
                                            <input type="text" class="form-control" id="inputTensi"
                                                aria-describedby="" name="tensi" value="{{old('tensi')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTT_K1" class="form-label">Status TT K1</label>
                                            <input type="text" class="form-control" id="inputTT_K1"
                                                aria-describedby="" name="status_TT1_K1" value="{{old('status_TT1_K1')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTM" class="form-label">TM/K1/K4</label>
                                            <input type="text" class="form-control" id="inputTM"
                                                aria-describedby="" name="TM" value="{{old('TM')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputFE1" class="form-label">FE1/FE2/FE3</label>
                                            <input type="text" class="form-control" id="inputFE1"
                                                aria-describedby="" name="FE" value="{{old('FE')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                            <label for="inputBATlain" class="form-label">BAT Lain</label>
                                            <input type="text" class="form-control" id="inputBATlain"
                                                aria-describedby="" name="BAT_LAIN" value="{{old('BAT_LAIN')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>



                                    </div>

                                </div>
                            </div>
                            <!-- Halaman 3 -->
                            <div class="tab-pane fade" id="page3" role="tabpanel" aria-labelledby="page3-tab">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputPresentasi" class="form-label">Presentasi</label>
                                            <input type="text" class="form-control" id="inputPresentasi"
                                                aria-describedby="" name="PRESENTASI" value="{{old('PRESENTASI')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputDJJ" class="form-label">DJJ</label>
                                            <input type="text" class="form-control" id="inputDJJ"
                                                aria-describedby="" name="DJJ" value="{{old('DJJ')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputKepalaTHD" class="form-label">Kepala THD
                                                PAP</label>
                                            <input type="text" class="form-control" id="inputKepalaTHD"
                                                aria-describedby="" name="KEPALA_THD_PAP" value="{{old('KEPALA_THD_PAP')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTBJ" class="form-label">TBJ</label>
                                            <input type="text" class="form-control" id="inputTBJ"
                                                aria-describedby="" name="TBJ" value="{{old('TBJ')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputHB" class="form-label">HB</label>
                                            <input type="text" class="form-control" id="inputHB"
                                                aria-describedby="" name="HB" value="{{old('HB')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputProteinUrine" class="form-label">Protein
                                                Urine</label>
                                            <input type="text" class="form-control" id="inputProteinUrine"
                                                aria-describedby="" name="Protein_urine" value="{{old('Protein_urine')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">

                                        <div class="mb-1 form-outline border-0 border-bottom border-dark">
                                            <label for="inputGoldar" class="form-label">Golongan Darah</label>
                                            <input type="text" class="form-control" id="inputGoldar"
                                                aria-describedby="" name="GOLDAR" value="{{old('GOLDAR')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-1 form-outline border-0 border-bottom border-dark">
                                            <label for="inputHBsAG" class="form-label">HBsAG</label>
                                            <input type="text" class="form-control" id="inputHBsAG"
                                                aria-describedby="" name="HBSAG" value="{{old('HBSAG')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-1 form-outline border-0 border-bottom border-dark">
                                            <label for="inputIMS" class="form-label">IMS</label>
                                            <input type="text" class="form-control" id="inputIMS"
                                                aria-describedby="" name="IMS" value="{{old('IMS')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-1 form-outline border-0 border-bottom border-dark">
                                            <label for="inputHIV" class="form-label">HIV</label>
                                            <input type="text" class="form-control" id="inputHIV"
                                                aria-describedby="" name="HIV" value="{{old('HIV')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-1">
                                            <label for="inputKomplikasi" class="form-label">Komplikasi</label>
                                            <div class="mb-0">
                                                <input type="checkbox" class="form-check-input" id="inputHDK"
                                                    name="HDK" value="1">
                                                <input type="hidden" name="HDK" value="0">
                                                <label for="inputKomplikasi" class="form-label">HDK</label>
                                                <input type="hidden" name="ABORTUS" value="0">
                                                <input type="checkbox" class="form-check-input" id="inputAbortus"
                                                    name="ABORTUS" value="1">
                                                <label for="inputKomplikasi" class="form-label">Abortus</label>
                                                <input type="hidden" name="PERDARAHAN" value="0">
                                                <input type="checkbox" class="form-check-input" id="inputPerdarahan"
                                                    name="PERDARAHAN" value="1">
                                                <label for="inputBCG" class="form-label">Perdarahan</label>
                                                <input type="hidden" name="INFEKSI" value="0">
                                                <input type="checkbox" class="form-check-input" id="inputInveksi"
                                                    name="INFEKSI" value="1">
                                                <label for="inputBCG" class="form-label">Infeksi</label>
                                                <input type="hidden" name="KPD" value="0">
                                            </div>
                                            <div class="mb-0">
                                                <input type="checkbox" class="form-check-input" id="inputKPD"
                                                    name="KPD" value="1">
                                                <label for="inputBCG" class="form-label">KPD</label>


                                                <label for="inputBCG" class="form-label ms-1">lain-lain</label>
                                                <input type="text" class="form-controll" id="inputlain-lain"
                                                    name="LAIN_LAIN" value="">
                                                <input type="hidden" name="Komplikasi" value="0">
                                            </div>
                                        </div>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}

                                        <div class="mb-1 form-outline border-0 border-bottom border-dark ">
                                            <label for="inputRujuk" class="form-label">Rujuk Ke</label>
                                            <input type="text" class="form-control" id="inputRujuk"
                                                aria-describedby="" name="RUJUK" value="{{old('RUJUK')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>



                                    </div>
                                    <div class="col-md-4">

                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTrimester1" class="form-label">Trimester
                                                1</label>
                                            <input type="text" class="form-control" id="inputTrimester1"
                                                aria-describedby="" name="trisemester1" value="">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTrimester2" class="form-label">Trimester
                                                2</label>
                                            <input type="text" class="form-control" id="inputTrimester2"
                                                aria-describedby="" name="trisemester2" value="">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTrimester3" class="form-label">Trimester
                                                3</label>
                                            <input type="text" class="form-control" id="inputTrimester3"
                                                aria-describedby="" name="trisemester3" value="">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputFR" class="form-label">FR/R</label>
                                            <input type="text" class="form-control" id="inputFR"
                                                aria-describedby="" name="FR" value="{{old('FR')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputFR" class="form-label">keterangan</label>
                                            <input type="text" class="form-control" id="inputFR"
                                                aria-describedby="" name="keterangan" value="{{old('keterangan')}}">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>


                                        <button type="submit" class="btn btn-success">Simpan</button>

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
@endsection
