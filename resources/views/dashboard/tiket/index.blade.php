@extends('dashboard.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Daftar Penumpang {{ $kapal->list_nama_212356 }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/dashboard/jadwal_kapals/{{ $kapal->id }}/add_jadwal" type="button"
                        class="btn btn-sm btn-info">Tambah Jadwal
                        Kapal</a>
                    <a href="/dashboard/list_kapals" type="button" class="btn btn-sm btn-danger">Kembali</a>
                </div>
            </div>
        </div>
        <div class="table-responsive small">

            <table class="table table-striped table-sm">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">No.HP/WA</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                </tr>
                </thead>
                @foreach ($tikets as $tiket)
                    <tr>
                        <td>{{ $tiket->nama_pesan_212356 }}</td>
                        <td>{{ $tiket->noHp_pesan_212356 }}</td>
                        <td>{{ $tiket->email_pesan_212356 }}</td>
                        <td>{{ $tiket->alamat_pesan_212356 }}</td>
                        <td><a href="/dashboard/tikets/{{ $tiket->id }}/download"
                                class="badge bg-info text-decoration-none">CETAK
                                TIKET</a>
                            {{-- <td><a href="/dashboard/jadwal_kapals/{{ $tiket->id }}/edit"
                                class="badge bg-warning text-decoration-none">EDIT</a>
                            
                            {{-- <form action="/dashboard/jadwal_kapals/{{ $tiket->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure?')">HAPUS</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </main>
@endsection
