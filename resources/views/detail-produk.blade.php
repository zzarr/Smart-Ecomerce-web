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
                        <li class="breadcrumb-item active">{{ $garapan->nama_tanaman }}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{ $garapan->nama_tanaman }}</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <img src="{{ asset($garapan->photo) }}" alt="" class="mx-auto  d-block" height="300">

                        </div><!--end col-->
                        <div class="col-lg-6 align-self-center">
                            <div class="">
                                <h5 class="font-24 mb-0">{{ $garapan->nama_tanaman }}</h5>

                                <h6 class="font-20 fw-bold">Rp. {{ $garapan->harga_per_unit }}/Kg</h6>
                                <h6 class="font-13">Detail :</h6>
                                <p class="text-muted">{{ $garapan->deskripsi }}
                                </p>
                                <h6 class="font-13">Tanggal Tanam :{{ $garapan->tanggal_tanam }}</h6>
                                <h6 class="font-13">Perkiraan panen :{{ $garapan->tanggal_panen }}</h6>

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
