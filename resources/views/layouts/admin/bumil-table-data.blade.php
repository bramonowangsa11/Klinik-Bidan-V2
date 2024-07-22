@extends('layouts.admin.navbar')
@section('main-content')
    {{-- bagian kb dan search --}}
    <div class="row col-md-12 col-11 ms-0">
        <div class=" col-md-7 mt-2">
            <h1 class=" fw-bold">Data Ibu Hamil</h1>
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
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                            name="keyword">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2">
            <a href="/daftar-bumil">
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
                        <th>Tanggal Pemeriksaan</th>
                        <th>Nama Ibu</th>
                        <th>Nama Suami</th>
                        <th>NIK Ibu/Suami</th>
                        {{-- <th>NIK Suami</th> --}}
                        <th>NO KK</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ancs as $key => $anc)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $anc->tgl_pemeriksaan }}</td>
                            <td>{{ $anc->Istri->name }}</td>
                            <td>{{ $anc->Suami->name }}</td>
                            <td>
                                <div class=" border-bottom border-1 border-black">
                                    {{ $anc->Istri->nik }}
                                </div>
                                <div>
                                    {{ $anc->Suami->nik }}
                                </div>
                            </td>
                            {{-- <td>{{ $anc->nik_suami }}</td> --}}
                            <td>{{ $anc->no_kk }}</td>

                            <td>{{ $anc->Suami->alamat }}</td>

                            <td>
                                <a href="{{ route('bumil.showid', ['id' => $anc->id]) }}">
                                    <button type="button" class="btn btn-info btn-sm">Detail</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        {{ $ancs->links() }}
    </div>
@endsection
