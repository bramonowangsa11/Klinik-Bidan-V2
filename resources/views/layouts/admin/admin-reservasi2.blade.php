@extends('layouts.admin.navbar')
@section('main-content')
        <div class="container col-md-9 ">
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
                <div class="col-md-5  align-items-center">
                    <form action="/reservasi" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tglReservasi" class="form-label">Tanggal Reservasi</label>
                            <input type="date" class="form-control" id="tglReservasi" placeholder="dd/mm/yyyy"
                                name="tgl_reservasi" value="{{ $tgl }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Sesi" class="form-label">Sesi Ke-</label>
                            <select class="form-select" id="Sesi" aria-label="Default select example"
                                name="sesi">
                                @foreach ($availableSessions as $session)
                                    <option name='sesi' value="{{ $session }}">Sesi {{ $session }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="layanan" class="form-label">Jenis Layanan</label>
                            <select class="form-select" id="layanan" aria-label="Default select example"
                                name="layanan">
                                <option name="layanan" value="Imunisasi">Imunisasi</option>
                                <option name="layanan" value="Bumil">Ibu Hamil</option>
                                <option name="layanan" value="KB">KB</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                        </div>
                        <button class="btn btn-success" type="submit">Reservasi</button>
                    </form>
                </div>

            </div>

        </div>
@endsection
