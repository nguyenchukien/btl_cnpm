<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
{{--<header>--}}
{{--    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <form method="post" action="#" class="d-flex" role="search">--}}
{{--                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm sách"--}}
{{--                           aria-label="Search" name="nameSong">--}}
{{--                    <button class="btn btn-outline-success" type="submit" name="search">Tìm</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}
<div class="container d-flex vh-100">

    @yield('content')

</div>
</body>

<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary border-2 fixed-bottom"
        style="height:80px">
    <h4 class="text-center text-uppercase fw-bold">thư viện nhà mình</h4>
</footer>

</html>
