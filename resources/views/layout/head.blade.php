<link rel="stylesheet" href="{{ asset('metrica/css/app.min.css') }}">
<link rel="stylesheet" href="{{ asset('portal-theme-bs5/assets/css/portal.css') }}">
<link rel="stylesheet" href="{{ asset('metrica/css/icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('metrica/css/bootstrap.css') }}">
<style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .page-wrapperm {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        padding: 0;
    }

    .page-content-tabm {
        flex: 1;
    }
</style>
@vite(['resources/js/app.js'])
