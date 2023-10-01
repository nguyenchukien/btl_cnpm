<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-20 ml-3 w-100">
        <img class="logo" src="{{ asset('img/anhsach.jpg') }}">
        <div class="collapse navbar-collapse w-100" id="navbarNavDropdown">
            <ul class="navbar-nav w-90">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('khachs.index') }}">Quản lý bạn đọc </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sachs.index') }}">Quản lý sách</a>
                </li>

                <form class="d-flex ms-auto">
                    <a class="btn btn-primary" href="index.php?controller=Member&action=logout" role="button">Đăng xuất</a>
                </form>
            </ul>
        </div>
    </nav>
</div>
    <div class="container mt-5">

        <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý sách</b></h1>


        @yield('content')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2"
        style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">thư viện nhà mình</h4>
</footer>

</html>
