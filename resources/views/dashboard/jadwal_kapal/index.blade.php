@extends('dashboard.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Jadwal Kapal {{ $kapal->list_nama_212356 }}</h1>
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
                <thead>
                    <tr>
                        <th colspan="1" scope="colgroup">Nama Pelabuhan</th>
                        <th colspan="2" class="text-center" scope="colgroup">Berangkat</th>
                        <th colspan="1" cope="colgroup">Pelabuhan Tujuan</th>
                        <th colspan="2" class="text-center" scope="colgroup">Tiba</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col"></th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                    </tr>
                </thead>
                @foreach ($jadwal_kapals as $jadwal_kapal)
                    <tr>
                        <td>{{ $jadwal_kapal->pelabuhan_asal_212356 }}</td>
                        <td>{{ $jadwal_kapal->tanggal_berangkat_212356 }}</td>
                        <td>{{ $jadwal_kapal->jam_berangkat_212356 }}</td>
                        <td>{{ $jadwal_kapal->pelabuhan_tujuan_212356 }}</td>
                        <td>{{ $jadwal_kapal->tanggal_tiba_212356 }}</td>
                        <td>{{ $jadwal_kapal->jam_tiba_212356 }}</td>
                        <td><a href="/dashboard/jadwal_kapals/{{ $jadwal_kapal->id }}/edit"
                                class="badge bg-warning text-decoration-none">EDIT</a>
                            <a href="/dashboard/tikets/{{ $jadwal_kapal->id }}"
                                class="badge bg-info text-decoration-none">TIKET</a>
                            <form action="/dashboard/jadwal_kapals/{{ $jadwal_kapal->id }}" method="post"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure?')">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </main>
@endsection
