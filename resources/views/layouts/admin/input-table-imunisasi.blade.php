@extends('layouts.admin.navbar')
@section('main-content')
                <div class="col-md-12">
                    <div class="row">
                        <div class=" mt-3">
                            <h1 class=" fw-bold">Input Data Imunisasi</h1>
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
                        <div class="col-md-3">
                            <form class=" mt-2" method="POST" action="{{ route('imunisasi.store') }}">
                                @csrf
                                {{-- kiri --}}
                                <div class="">
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTanggal" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" id="inputTanggal" aria-describedby=""
                                            name="tanggal">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputNamaAnak" class="form-label">Nama Anak</label>
                                        <input type="text" class="form-control" id="inputNamaAnak"
                                            aria-describedby="" name="nama_anak" value='{{$anak->name}}' readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputNIK" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="inputNIK" aria-describedby=""
                                            name="nik_anak" value="{{$anak->nik}}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
                                        <input type="text" class="form-control" id="inputNamaOrtu"
                                            aria-describedby="" name="nama_orangtua" value='{{$ortu->name}}' readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTanggalLhr" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="inputTanggalLhr"
                                            aria-describedby="" name="tgl_lahir" value='{{$anak->ttl}}' readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputAlamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="inputAlamat" aria-describedby=""
                                            name="alamat" value="{{$ortu->alamat}}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                </div>

                                {{-- </form> --}}
                        </div>
                        {{-- Tengah --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                <input type="text" class="form-control" id="inputBeratBadan" aria-describedby=""
                                    name="berat_badan" value="{{old('berat_badan')}}" >
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-4 form-outline border-0 border-bottom border-dark">
                                <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
                                <input type="text" class="form-control" id="inputPanjangBadan" aria-describedby=""
                                    name="panjang_badan">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-4 form-outline border-0 border-bottom border-dark">
                                <label for="inputPanjangBadan" class="form-label">KIPI</label>
                                <input type="text" class="form-control" id="inputPanjangBadan" aria-describedby="" name="kipi">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-4 form-outline border-0 border-bottom border-dark">
                                <label for="inputPanjangBadan" class="form-label">Vaksin</label>
                                <input type="text" class="form-control" id="inputPanjangBadan" aria-describedby=""name="vaksin">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-2">
                                <label for="inputHBO" class="form-label">HBO</label>
                                <input type="text" class="form-check-input" name="HBO"
                                                            id="inputBCG" value="0" hidden>
                                <input type="checkbox" class="form-check-input" id="inputHBO" name="HBO"
                                    value='1'>

                            </div>
                            <div class="mb-2">
                                <label for="inputBCG" class="form-label">BCG</label>
                                <input type="text" class="form-check-input" name="BCG"
                                                            id="inputBCG" value="0" hidden>
                                <input type="checkbox" class="form-check-input" id="inputBCG" name="BCG"
                                    value='1'>

                            </div>
                            <div class="mb-4">
                                <label for="inputPenta" class="form-label">PENTA</label>
                                <div>
                                    <input type="text" class="form-check-input" name="PENTA"
                                                            id="inputBCG" value="0" hidden>
                                    <input type="checkbox" class="form-check-input" id="inputPenta" name="PENTA"
                                        value="1">
                                    <label for="inputPenta" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputPenta" name="PENTA"
                                        value="2">
                                    <label for="inputPenta" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputPenta" name="PENTA"
                                        value="3">
                                    <label for="inputPenta" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            



                        </div>

                        {{-- Kanan --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-4">
                                <label for="inputIPV" class="form-label">IPV</label>
                                <div>
                                    <input type="text" class="form-check-input" name="IPV"
                                                            id="inputBCG" value="0" hidden>
                                    <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV"
                                        value="1">
                                    <label for="inputIPV" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV"
                                        value="2">
                                    <label for="inputIPV" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV"
                                        value="3">
                                    <label for="inputIPV" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="inputPCV" class="form-label">PCV</label>
                                <div>
                                    <input type="text" class="form-check-input" name="PCV"
                                                            id="inputBCG" value="0" hidden>
                                    <input type="checkbox" class="form-check-input" id="inputPCV" name="PCV"
                                        value="1">
                                    <label for="inputPCV" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputPCV" name="PCV"
                                        value="2">
                                    <label for="inputPCV" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputPCV" name="PCV"
                                        value="3">
                                    <label for="inputPCV" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-4">
                                <label for="inputBCG" class="form-label">Rota Virus</label>
                                <div>
                                    <input type="text" class="form-check-input" name="ROTA_VIRUS"
                                                            id="inputBCG" value="0" hidden>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS"
                                        value="1">
                                    <label for="inputBCG" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS"
                                        value="2">
                                    <label for="inputBCG" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS"
                                        value="3">
                                    <label for="inputBCG" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="inputTPV" class="form-label">MK</label>
                                <input type="text" class="form-check-input" name="MK"
                                                            id="inputBCG" value="0" hidden>
                                <input type="checkbox" class="form-check-input" id="inputTPV" name="MK"
                                    value='1'>

                            </div>
                            <div class="mb-3">
                                <label for="inputTPV" class="form-label">Booster</label>
                                <div>
                                    <input type="text" class="form-check-input" id="inputTPV" name="booster"
                                        value="0" hidden>
                                    <input type="checkbox" class="form-check-input" id="inputTPV" name="booster"
                                        value="PENTA">
                                    <label for="inputTPV" class="form-label">Penta</label>
                                    <input type="checkbox" class="form-check-input" id="inputTPV" name="booster"
                                        value="MK">
                                    <label for="inputTPV" class="form-label">MK</label>
                                    <input type="text" name='id_ortu' hidden value="{{$ortu->id}}">
                                    <input type="text" name='id_anak' hidden value="{{$anak->id}}">
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary mb-md-3 position-relative mt-auto mb">Submit</button>
                            </form>




                        </div>
                    </div>

                </div>
@endsection




