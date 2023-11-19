@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>tambah data</title>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <h5 class="card-header">Tambah Jadwal Kapal</h5>
            <div class="card-body">
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Nama Kapal</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" required autocomplete="off">
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Berangkat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" required autocomplete="off">
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Tiba</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" required autocomplete="off">
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Rute</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" required autocomplete="off">
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">harga</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" required autocomplete="off">
                  </div>
                </div>
              <a href="#" class="btn btn-primary"> Tabah data</a>
            </div>
          </div>
    </div>

  </body>
</html>
@endsection