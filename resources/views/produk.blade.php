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
                                @foreach ($kategori as $item)
                                    <li class="list-group-item"><i
                                            class="la la-angle-double-right text-info me-2"></i>{{ $item->nama_kategori }}
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">

            <div class="row">
                @foreach ($garapan as $hasilTani)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset($hasilTani->photo) }}" alt=""
                                    class="d-block mx-auto my-4 img-fluid" height="150">

                                <div class="d-flex justify-content-between align-items-center my-4">
                                    <div>
                                        <p class="text-muted mb-2">{{ $hasilTani->nama_tanaman }}</p>
                                        <a href="{{ route('detail_produk', $hasilTani->id) }}"
                                            class="header-title">{{ $hasilTani->nama_tanaman }}</a>
                                    </div>
                                    <div>
                                        <h5 class="text-dark mt-0 mb-2">Rp. {{ $hasilTani->harga_per_unit }}/Kg</h5>

                                    </div>
                                </div>
                                <div class="d-grid">

                                    <button class="btn btn-de-primary">Add To Cart</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                @endforeach
            </div>

        </div>
    @endsection
