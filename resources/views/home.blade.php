@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-12 mt-3 mb-4">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="p-5">
                        <!--<span class="bg-soft-pink p-2 rounded">Mannat Themes</span>-->
                        <h1 class="my-4 font-weight-bold">Selamat datang <span class="text-success">SHOOPAN</span>.
                        </h1>

                        <button type="button" class="btn btn-de-primary">Get Started</button>
                    </div>
                </div><!--end col-->
                <div class="col-lg-5 offset-lg-1 text-center">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="{{ asset('images/background/background.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('images/background/background.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/background/background.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="">
                <h2>Hasil Tani Terbaru</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="card my-3 mx-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('images/HasilTani/kentang.jpg') }}" alt=""
                                class="d-block mx-auto my-4 img-fluid" height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">Kentang</p>
                                    <a href="#" class="header-title">Kentang</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">Rp. 10.000,00</h4>

                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-de-primary">Add To Cart</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <!--end ribbon-->
                            <img src="{{ asset('images/HasilTani/cabai.jpg') }}" alt=""
                                class="d-block mx-auto my-4 img-fluid" height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">Cabai</p>
                                    <a href="#" class="header-title">Cabai</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">Rp. 40.000,00</h4>

                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-de-primary">Add To Cart</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <!--end ribbon-->
                            <img src="{{ asset('images/HasilTani/wortel.jpg') }}" alt=""
                                class="d-block mx-auto my-4 img-fluid" height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">wortel</p>
                                    <a href="#" class="header-title">Wortel</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">Rp. 22.000,00</h4>

                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-de-primary">Add To Cart</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <!--end ribbon-->
                            <img src="{{ asset('images/HasilTani/jagung.jpg') }}" alt=""
                                class="d-block mx-auto my-4 img-fluid" height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">Jagung</p>
                                    <a href="#" class="header-title">Jangung
                                    </a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">Rp. 39.000,00 </h4>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-de-primary">Add To Cart</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>
        </div>
    </div>

    <div class="container-fluid p-2">


    </div>
@endsection
