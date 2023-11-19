@extends('layouts.main')

@section('container')
    <style>
        body {
            background-image: url('ship.jpg');
        }
    </style>
    <div class="container">

        {{-- <h1 class="mb-4 text-center">{{ $title }}</h1> --}}
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/user/reservasi">
                    <div class="input-group mb-3">
                        <select name="search" class="form-select" aria-label="Default select example">

                            <option value="a">Jadwal Kapal dalam Waktu Dekat</option>

                            @foreach ($kapals as $kapal)
                                <option value="{{ $kapal->id }}">{{ $kapal->list_nama_212356 }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-danger" type="submit">Cek Jadwal Kapal</button>
                    </div>
                </form>
            </div>
        </div>


        <h3 class="mb-4 mt-4 text-center">{{ $search }}</h3>


        @if ($jadwal_kapals->count())
            <table class="table table-striped table-sm mt-4">
                <thead>
                    <tr>
                        <th colspan="1" scope="colgroup">Nama Kapal</th>
                        <th colspan="1" scope="colgroup">Nama Pelabuhan</th>
                        <th colspan="2" class="text-center" scope="colgroup">Berangkat</th>
                        <th colspan="1" cope="colgroup">Pelabuhan Tujuan</th>
                        <th colspan="2" class="text-center" scope="colgroup">Tiba</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col"></th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                    </tr>
                </thead>

                <tbody id="jadwal">
                    @foreach ($jadwal_kapals as $jadwal_kapal)
                        <tr>
                            <td>{{ $jadwal_kapal->tbl_list_kapal_212356->list_nama_212356 }}</td>
                            <td>{{ $jadwal_kapal->pelabuhan_asal_212356 }}
                            <td>{{ $jadwal_kapal->tanggal_berangkat_212356 }}</td>
                            <td>{{ $jadwal_kapal->jam_berangkat_212356 }}</td>
                            <td>{{ $jadwal_kapal->pelabuhan_tujuan_212356 }}</td>
                            <td>{{ $jadwal_kapal->tanggal_tiba_212356 }}</td>
                            <td>{{ $jadwal_kapal->jam_tiba_212356 }}</td>
                            <td><a href="/pesan_tiket/{{ $jadwal_kapal->id }}"
                                    class="badge bg-warning text-decoration-none">Pesan Tiket</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="col-md-12">
                <h5 class="text-center bg-danger" style="color: white">Belum ada jadwal kapal</h5>
            </div>
        @endif

    </div>
@endsection
