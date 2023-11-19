@extends('layouts.main')

@section('container')
    <div class="container">

        <main>
            <div class=" text-center">

                <h2>Checkout form</h2>
                <p class="lead">Tiket ini berlaku untuk</p>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Tiket Pesanan</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <small class="text-body-secondary">Nama Kapal</small>
                                <h6 class="my-0">{{ $jadwal_kapal->tbl_list_kapal_212356->list_nama_212356 }}</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>

                                <small class="text-body-secondary">Tanggal Berangkat</small>
                                <h6 class="my-0">{{ $jadwal_kapal->tanggal_berangkat_212356 }} </h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>

                                <small class="text-body-secondary">Pelabuhan Asal</small>
                                <h6 class="my-0">{{ $jadwal_kapal->pelabuhan_asal_212356 }}</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <small class="text-body-secondary">Pelabuhan Tujuan</small>
                                <h6 class="my-0">{{ $jadwal_kapal->pelabuhan_tujuan_212356 }}</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>

                                <small class="text-body-secondary">Tanggal Tiba</small>
                                <h6 class="my-0">{{ $jadwal_kapal->tanggal_tiba_212356 }}</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <small>Harga Tiket</small>
                                <h2 class="my-0">{{ $jadwal_kapal->harga_tiket_212356 }}</h2>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Registrasi Pemesan</h4>
                    <form method="post" action="/pesan_tiket/{{ $jadwal_kapal->id }}/add" class="needs-validation"
                        novalidate>
                        @csrf

                        <div class="row g-3">
                            <input type="hidden" name="tbl_jadwal_kapal_212356_id" value="{{ $jadwal_kapal->id }}">
                            <div class="col-12">
                                <label for="nama_pesan_212356" class="form-label">Nama</label>
                                <input type="text" name="nama_pesan_212356" class="form-control" id="nama_pesan_212356"
                                    placeholder="Nama Pemesan" required>
                                <div class="invalid-feedback">
                                    Nama anda belum dimasukan
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="noHp_pesan_212356" class="form-label">No. Tlp / Whatsapp</label>
                                <input type="text" class="form-control" name="noHp_pesan_212356" id="noHp_pesan_212356"
                                    placeholder="085256632">
                                <div class="invalid-feedback">
                                    Masukan nomor telpon/Whatsappp anda
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email_pesan_212356" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email_pesan_212356" id="email_pesan_212356"
                                    placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Masukan Email anda
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="alamat_pesan_212356" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat_pesan_212356"
                                    id="alamat_pesan_212356" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Masukan alamat anda
                                </div>
                            </div>
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Pesan Tiket</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
