@extends('dashboard.main')
@section('container')
    {{-- @dd($list_kapals) --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">List Nama Kapal</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/dashboard/list_kapals/create" type="button" class="btn btn-sm btn-danger">Tambah list
                        Kapal</a>
                </div>
            </div>
        </div>
        <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kapal</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($list_kapals as $list_kapal)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $list_kapal->list_nama_212356 }}</td>
                            <td>
                                <a href="/dashboard/jadwal_kapals/{{ $list_kapal->id }}"
                                    class="badge text-bg-primary text-decoration-none">Set
                                    Jadwal Kapal</a>

                                <a href="/dashboard/list_kapals/{{ $list_kapal->id }}/edit"
                                    class="badge bg-warning text-decoration-none">Edit</a>
                                <form action="/dashboard/list_kapals/{{ $list_kapal->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
    </main>
@endsection
