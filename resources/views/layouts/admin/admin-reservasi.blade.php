@extends('layouts.admin.navbar')
@section('main-content')
        <div class="container col-md-9">
            <h1>RESERVASI</h1>
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
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-5 align-items-center">
                    <form action="/reservasi-admin" method="GET">
                        @csrf
                        <div class="mb-3">
                            <label for="tglReservasi" class="form-label">Tanggal Reservasi</label>
                            <input type="date" class="form-control" id="tglReservasi" placeholder="dd/mm/yyyy"
                                name='tgl_reservasi'>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>

            </div>

        </div>
@endsection
