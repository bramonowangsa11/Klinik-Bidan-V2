@extends('layouts.admin.navbar-daftar')
@section('main-content')

    <div class="col-md-12">
        <div class="row d-flex justify-content-center align-items-center">
            <div class=" mt-3 d-flex justify-content-center align-items-center">
                <h1 class=" fw-bold">Daftar Ibu Hamil</h1>
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
            <div class="col-md-3 justify-content-center align-items-center d-flex">
                <form class=" mt-2" method="GET" action="{{ route('bumil.nik') }}">
                    @csrf
                    {{-- kiri --}}
                    <div class="">

                        <div class="mb-3 form-outline border-0 border-bottom border-dark" id="nikform">
                            <label for="nikIbu" class="form-label">NIK Istri</label>
                            <input type="text" class="form-control" id="nikIbu" aria-describedby="" name="nik_istri">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                            <label for="nikSuami" class="form-label">NIK Suami</label>
                            <input type="text" class="form-control" id="nikSuami" aria-describedby="" name="nik_suami">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <button type="submit" class="btn btn-success mb-md-3">Tambah</button>
                        <a href="/tambah-pasien" type="button"
                            class="btn btn-primary mb-md-3 position-relative mt-auto mb">Daftar</a>
                </form>


            </div>
            {{-- </form> --}}
        </div>



    </div>
@endsection
