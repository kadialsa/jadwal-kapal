<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container">
            <a class="navbar-brand" href="#page-top" style="font-size: 25px; font-weight: bold; color:white">LOKET</a>
            <button class="navbar-toggler navbar-toggler-ringht" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mr-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/reservasi?search=a"
                            style="{{ $active === 'reservasi' ? 'font-weight: bold; ' : '' }}color: white;">Reservasi
                            Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Galeri</a>
                    </li>
                    {{-- <button type="submit" class="btn btn-primary">Login</button> --}}f
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>
