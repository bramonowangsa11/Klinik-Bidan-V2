@extends('layouts.admin.navbar')
@section('main-content')
                <div class="col-md-12">
                    <div class="row">
                        <div class=" mt-3">
                            <h1 class=" fw-bold">Input Data KB</h1>
                        </div>
                        {{-- alert --}}
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    @if (session('errors'))
                        Swal.fire({
                            title: 'Error!',
                            text: '{{ session('errors') }}',
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
                            <form class=" mt-2" method="POST" action="{{ route('kb.store') }}">
                                @csrf
                                {{-- kiri --}}
                                <div class="">
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="tanggal-kb" class="form-label">Tanggal KB</label>
                                        <input type="date" class="form-control" id="tangal-kb" aria-describedby=""
                                            name="tgl_kb" value="{{old('tgl_kb')}}">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="nikform">
                                        <label for="nikIbu" class="form-label">NIK Ibu</label>
                                        <input type="text" class="form-control" id="nikIbu" aria-describedby=""
                                            value="{{ $ibu->nik }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                                        <label for="namaIbu" class="form-label">Nama Ibu</label>
                                        <input type="text" class="form-control" id="namaIbu" aria-describedby=""
                                            value="{{ $ibu->name }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                                        <label for="nikSuami" class="form-label">NIK Suami</label>
                                        <input type="text" class="form-control" id="nikSuami" aria-describedby=""
                                            value="{{ $suami->nik }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>

                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                                        <label for="namaSuami" class="form-label">Nama Suami</label>
                                        <input type="text" class="form-control" id="namaSuami" aria-describedby=""
                                            value="{{ $suami->name }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="jumlah-anak" class="form-label">Jumlah Anak</label>
                                        <input type="number" class="form-control" id="jumlah-anak" aria-describedby=""
                                            name="jmlh_anak" value="{{ old('jmlh_anak') }}">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>

                                </div>
                                {{-- </form> --}}
                        </div>
                        {{-- Tengah --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="umur-anak-terkecil" class="form-label">Umur Anak Terkecil</label>
                                <input type="number" class="form-control" id="umur-anak-terkecil" aria-describedby=""
                                    name="umur_anak_terkecil" value="{{ old('umur_anak_terkecil') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="jaminan" class="form-label">Jaminan</label>
                                <input type="text" class="form-control" id="jaminan" aria-describedby=""
                                    name="jaminan"value="{{ old('jaminan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="alki" class="form-label">Alki</label>
                                <input type="text" class="form-control" id="alki" aria-describedby=""
                                    name="alki"value="{{ old('alki') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="pasca-plasenta" class="form-label">Pasca Plasenta</label>
                                <input type="text" class="form-control" id="pasca-plasenta" aria-describedby=""
                                    name="pasca_plasenta"value="{{ old('pasca_plasenta') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                <label for="pasca-salin" class="form-label">Pasca Salin</label>
                                <input type="text" class="form-control" id="pasca-salin" aria-describedby=""
                                    name="pasca_salin" value="{{ old('pasca_salin') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="do" class="form-label">DO</label>
                                <input type="text" class="form-control" id="do" aria-describedby=""
                                    name="do"value="{{ old('do') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>



                        </div>
                        {{-- Kanan --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="gc-dari" class="form-label">gc dari</label>
                                <input type="text" class="form-control" id="gc-dari" aria-describedby=""
                                    name="gc_dari"value="{{ old('gc_dari') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>

                            <div class="mb-4">
                                <label for="metode-kb" class="form-label">metode kb</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="IUD">
                                    <label for="metode-kb" class="form-label">IUD</label>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="STK">
                                    <label for="metode-kb" class="form-label">STK</label>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="PIL">
                                    <label for="metode-kb" class="form-label">PIL</label>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="CO">
                                    <label for="metode-kb" class="form-label">CO</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="beratBadan" class="form-label">Berat Badan</label>
                                <input type="number" class="form-control" id="beratBadan" aria-describedby=""
                                    name="berat_badan"value="{{ old('berat_badan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="tinggiBadan" class="form-label">tinggi Badan</label>
                                <input type="number" class="form-control" id="tinggiBadan" aria-describedby=""
                                    name="tinggi_badan"value="{{ old('tinggi_badan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="tensi" class="form-label">Tensi</label>
                                <input type="text" class="form-control" id="tensi" aria-describedby=""
                                    name="tensi"value="{{ old('tensi') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="lila" class="form-label">Lila</label>
                                <input type="number" class="form-control" id="lila" aria-describedby=""
                                    name="lila"value="{{ old('lila') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>



                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="tanggal-kembali" class="form-label">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tanggal-kembali" aria-describedby=""
                                    name="tgl_kembali"value="{{ old('tgl_kembali') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="kegagalan" class="form-label">Kegagalan</label>
                                <input type="text" class="form-control" id="kegagalan" aria-describedby=""
                                    name="kegagalan"value="{{ old('kegagalan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="inform-consent" class="form-label">Inform Consent</label>
                                <input type="text" class="form-control" id="inform-consent" aria-describedby=""
                                    name="inform_consent"value="{{ old('inform_consent') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" aria-describedby=""
                                    name="keterangan"value="{{ old('keterangan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <input type="text" class="form-control" id="keterangan" aria-describedby=""
                                name="id_suami" value="{{ $ibu->id }}" hidden>
                            <input type="text" class="form-control" id="keterangan" aria-describedby=""
                                name="id_ibu" value="{{ $suami->id }}" hidden>
                            <button type="submit"
                                class="btn btn-primary mb-md-3 position-relative mt-auto mb">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
@endsection


