@extends('layout.layout')
@section('content')
    <div class="row mb-4 p-2">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Hasil Tani</li>
                    </ol>
                </div>
                <h4 class="page-title">Hasil Tani</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="row mb-3">
                <div col="col">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button class="btn btn-soft-secondary" type="button" id="button-addon2"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>
                                Kategori
                                <hr>
                            </h5>
                        </div>
                        <div class="col">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Cras
                                    justo odio</li>
                                <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Dapibus
                                    ac facilisis in</li>
                                <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Morbi leo
                                    risus</li>
                                <li class="list-group-item"><i
                                        class="la la-angle-double-right text-info me-2"></i>Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('images/background/background.jpg') }}" alt=""
                                class="d-block mx-auto my-4 img-fluid" height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">lorem</p>
                                    <a href="#" class="header-title">lorem</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">$49.00 <small
                                            class="text-muted font-14"><del>$99.00</del></small></h4>
                                    <ul class="list-inline mb-0 product-review align-self-center">
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16"></i>
                                        </li>
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
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16"></i>
                                        </li>
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
                                        <li class="list-inline-item"><i class="la la-star text-warning font-16"></i>
                                        </li>
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
    @endsection
