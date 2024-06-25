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

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="">
                            </li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="">
                            </li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active"
                                aria-current="true"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="images/background/background.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/background/background.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="images/background/background.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
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
                            <img src="assets/images/products/05.png" alt="" class="d-block mx-auto my-4"
                                height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">lorem</p>
                                    <a href="#" class="header-title">lorem</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">$49.00 <small
                                            class="text-muted font-14"><del>$99.00</del></small></h4>
                                    <ul class="list-inline mb-0 product-review align-self-center">
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i
                                                class="la la-star-half-o text-warning font-16 ms-n2"></i></li>
                                    </ul>
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
                            <img src="assets/images/products/04.png" alt="" class="d-block mx-auto my-4"
                                height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">lorem</p>
                                    <a href="#" class="header-title">lorem</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">$9.00 <small
                                            class="text-muted font-14"><del>$18.00</del></small></h4>
                                    <ul class="list-inline mb-0 product-review align-self-center">
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i
                                                class="la la-star-half-o text-warning font-16 ms-n2"></i></li>
                                    </ul>
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
                            <img src="assets/images/products/03.png" alt="" class="d-block mx-auto my-4"
                                height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">Lorem</p>
                                    <a href="#" class="header-title">lorem</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">$39.00 <small
                                            class="text-muted font-14"><del>$99.00</del></small></h4>
                                    <ul class="list-inline mb-0 product-review align-self-center">
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i
                                                class="la la-star-half-o text-warning font-16 ms-n2"></i></li>
                                    </ul>
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
                            <img src="assets/images/products/02.png" alt="" class="d-block mx-auto my-4"
                                height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">lorem</p>
                                    <a href="#" class="header-title">lorem
                                    </a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">$39.00 <small
                                            class="text-muted font-14"><del>$99.00</del></small></h4>
                                    <ul class="list-inline mb-0 product-review align-self-center">
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i
                                                class="la la-star-half-o text-warning font-16 ms-n2"></i></li>
                                    </ul>
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
