<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/js/app.js'])
    <title>Home</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo/SHOPAN.png') }}"
                            alt="" width="58" height="58"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fs-5" aria-current="page" href="#"><i
                                    class="bi bi-house"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <nav class="nav-item m-2">
                        <button type="button" class="btn btn-outline-success">
                            <i class="bi bi-minecart-loaded"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
