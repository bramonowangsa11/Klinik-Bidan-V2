@extends('layouts.admin.navbar')
@section('main-content')
                {{-- bagian kb dan search --}}
                <div class="row col-md-12 col-11 ms-0">
                    <div class=" col-md-7 mt-2">
                        <h1 class=" fw-bold">Daftar Reservasi</h1>
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
                    <div class=" col-md-4">
                        <form class="form-inline my-2 my-lg-0" action="{{ route('imunisasi.search') }}" method="POST">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-9">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search" name="keyword">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <a href="/admin-reservasi">
                            <button type="button" class="btn btn-success btn-sm">tambah</button>
                        </a>
                    </div>
                </div>
                {{-- bagian tabel --}}
                <div class="row col-md-12 col-12 mt-2 ms-0">
                    <div class="overflow-x-scroll mb-2">
                        <table class="table table-responsive table-sm table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Sesi</th>
                                    <th>Jenis Layanan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservasis as $key => $reservasi)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $reservasi->user->name }}</td>
                                        <td>{{ $reservasi->tgl_reservasi }}</td>
                                        <td>{{ $reservasi->sesi }}</td>
                                        <td>{{ $reservasi->layanan }}</td>
                                        <td>{{ $reservasi->keterangan }}</td>

                                        <td>
                                            <form action="{{ route('reservasi.delete', $reservasi->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $reservasis->links() }}
                </div>

@endsection