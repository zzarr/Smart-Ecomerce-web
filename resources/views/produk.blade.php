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
                                <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Sayur
                                </li>
                                <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Buah</li>
                                <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Palwija
                                </li>

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
    @endsection
