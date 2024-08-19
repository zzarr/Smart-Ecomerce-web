<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    @include('layout\head')
    @stack('css')

    <title>{{ $webtitle }}</title>
</head>

<body class="app">
    <header class="app-header fixed-top">
        @include('petani.layout.header-inner')

        @include('petani.layout.side-panel')

    </header><!--//app-header-->

    <div class="app-wrapper"> @yield('content')</div>

    @include('layout\scripts')
    @stack('js')
</body>

</html>
