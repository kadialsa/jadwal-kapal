@extends('dashboard.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Jadwal Kapal</h1>
        </div>
        <div class="col-lg-8">
            <form method="POST" action="/dashboard/jadwal_kapals/{{ $jadwal_kapal->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <input id="tbl_list_kapal_212356_id" type="hidden" class="form-control" name="tbl_list_kapal_212356_id"
                        required value="{{ $jadwal_kapal->tbl_list_kapal_212356_id }}" autofocus>
                </div>

                <div class="mb-3">
                    <label for="pelabuhan_asal_212356" class="form-label">Pelabuhan Asal</label>
                    <input id="pelabuhan_asal_212356" class="form-control" name="pelabuhan_asal_212356" required autofocus
                        value="{{ old('pelabuhan_asal_212356', $jadwal_kapal->pelabuhan_asal_212356) }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal_berangkat_212356" class="form-label">Tanggal Berangkat</label>
                    <input type="date" min="1 Januari 2018" max="1 Januari 2030" id="tanggal_berangkat_212356"
                        class="form-control" name="tanggal_berangkat_212356" required autofocus
                        value="{{ old('tanggal_berangkat_212356', $jadwal_kapal->tanggal_berangkat_212356) }}">
                </div>
                <div class="mb-3">
                    <label for="jam_berangkat_212356" class="form-label">Jam Berangkat</label>
                    <input id="jam_berangkat_212356" type="time" class="form-control" name="jam_berangkat_212356"
                        required autofocus value="{{ old('jam_berangkat_212356', $jadwal_kapal->jam_berangkat_212356) }}">
                </div>
                <div class="mb-3">
                    <label for="pelabuhan_tujuan_212356" class="form-label">Pelabuhan Tujuan</label>
                    <input id="pelabuhan_tujuan_212356" class="form-control" name="pelabuhan_tujuan_212356" required
                        autofocus value="{{ old('pelabuhan_tujuan_212356', $jadwal_kapal->pelabuhan_tujuan_212356) }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal_tiba_212356" class="form-label">Tanggal Tiba</label>
                    <input type="date" min="1 Januari 2018" max="1 Januari 2030" id="tanggal_tiba_212356"
                        class="form-control" name="tanggal_tiba_212356" required autofocus
                        value="{{ old('tanggal_tiba_212356', $jadwal_kapal->tanggal_tiba_212356) }}">
                </div>
                <div class="mb-3">
                    <label for="jam_tiba_212356" class="form-label">Jam Tiba</label>
                    <input id="jam_tiba_212356" class="form-control" name="jam_tiba_212356" type="time" required
                        autofocus value="{{ old('jam_tiba_212356', $jadwal_kapal->jam_tiba_212356) }}">
                </div>
                <div class="mb-3">
                    <label for="harga_tiket_212356" class="form-label">Harga Tiket</label>
                    <input type="number" id="harga_tiket_212356" class="form-control" name="harga_tiket_212356" required
                        autofocus value="{{ old('harga_tiket_212356', $jadwal_kapal->harga_tiket_212356) }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/dashboard/jadwal_kapals/{{ $jadwal_kapal->tbl_list_kapal_212356_id }}"
                    class="btn btn-danger">Batal</a>
            </form>
        </div>
    </main>
@endsection
