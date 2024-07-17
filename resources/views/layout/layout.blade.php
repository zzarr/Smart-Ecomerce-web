<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .profile-img {
            width: 40px;
            /* Set the width you want */
            height: 40px;
            /* Set the height you want */
            object-fit: cover;
            /* Ensures the image covers the box without stretching */
        }
    </style>

    @include('layout\head')
    <title>{{ $title ?? 'Home' }}</title>
</head>

<body id="body m-0 p-0">
    @include('layout\navbar')
    <div class="page-wrapperm px-0">
        <div class="page-content-tabm m-0">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
    </div>



    </div>





    @include('layout\footer')
    @include('layout\scripts')



</body>

</html>
