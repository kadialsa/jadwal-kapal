@extends('layouts.main')

@section('container')
    <style>
        body {
            background-image: url('ship.jpg');
        }
    </style>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">AKSES JADWAL DAN TIKET KAPAL DENGAN MUDAH </h1><br>
                <p class="lead text-body-secondary">Loket adalah sebuah sistem informasi jadwal dan pemesanan tiket Kapal
                    Laut
                    masyarakat Wakatobi untuk dapat menjangkau daerah daerah sekitarnya.
                </p>
                <p>
                    <a href="/user/reservasi?search=a" class="btn btn-primary ">Lihat Jadwal Kapal</a>
                </p>
            </div>
        </div>
    </section>
@endsection
