<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý thư viện</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main.css') }}">

</head>
<body>

<div class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav" >
        <div class="container-fluid">
            <img class="logo" src="{{ asset('img/anhsach.jpg') }}">
            <button class="navbar-toggler text-black " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="text-black bi bi-list fs-1 "></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{ route('khachs.index') }}">Quản lý bạn đọc </a>
                    <a class="nav-link" href="{{ route('sachs.index') }}">Quản lý sách</a>
                    <a class="btn btn-outline-primary" href="{{ route('login') }}" role="button">Đăng xuất</a>
                </div>

            </div>
        </div>
    </nav>
</div>
    <div class="container mt-5">

        <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý bạn đọc</b></h1>

        @yield('content')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
