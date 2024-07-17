@extends('layout.layout')
@section('content')
    <div class="row mb-4 p-2">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Haisil Tani</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
                <h4 class="page-title">Kentang</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <img src="{{ asset('images/HasilTani/Kentang.jpg') }}" alt="" class="mx-auto  d-block"
                                height="300">

                        </div><!--end col-->
                        <div class="col-lg-6 align-self-center">
                            <div class="">
                                <h5 class="font-24 mb-0">kentang</h5>
                                <p class="text-muted mb-2">Morden and good look model 2021</p>

                                <h6 class="font-20 fw-bold">Rp. 10.000,00</h6>
                                <h6 class="font-13">Detail :</h6>
                                <p class="text-muted">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form,
                                    by injected humour, or randomised words which don't look.
                                </p>
                                <h6 class="font-13">Features :</h6>
                                <ul class="list-unstyled border-0">
                                    <li class="mb-2"><i class="las la-check-circle text-success me-1"></i>It is a long
                                        established fact that a reader will be distracted.</li>
                                    <li class="mb-2"><i class="las la-check-circle text-success me-1"></i>Contrary to
                                        popular belief, Lorem Ipsum is not text. </li>
                                    <li><i class="las la-check-circle text-success me-1"></i>There are many variations of
                                        passages of Lorem Ipsum available. </li>
                                </ul>
                                <div class="mt-3">
                                    <input class="form-control form-control-sm d-inline-block" style="width:100px;"
                                        type="number" min="0" value="0" id="example-number-input">
                                    <a href="" class="btn btn-de-primary btn-sm px-4 d-inline-block"><i
                                            class="mdi mdi-cart me-2"></i>Add to Cart</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
@endsection
