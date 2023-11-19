@extends('dashboard.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tabah List Kapal</h1>
        </div>
        <div class="col-lg-8">
            <form method="POST" action="/dashboard/list_kapals">
                @csrf
                <div class="mb-3">
                    <label for="list_nama_212356" class="form-label">Nama Kapal</label>
                    <input id="list_nama_212356" class="form-control" name="list_nama_212356" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/dashboard/list_kapals" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </main>
@endsection
