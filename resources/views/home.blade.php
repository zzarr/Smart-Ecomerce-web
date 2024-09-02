@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-12 mt-3 mb-4">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="p-5">
                        <!--<span class="bg-soft-pink p-2 rounded">Mannat Themes</span>-->
                        <h1 class="my-4 font-weight-bold">Selamat datang <span class="text-primary">SHOPAN</span>.
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
                                        <h5 class="text-dark mt-0 mb-2">Rp. {{ $hasilTani->harga_per_unit }}</h5>
                                        <h6>Perkiraan Tanggal
                                            Panen</h6>
                                        <h6 class="text-dark mt-0 mb-2">{{ $hasilTani->tanggal_panen }} </h6>

                                    </div>
                                </div>
                                <div class="d-grid">
                                    <form action="{{ route('add_keranjang') }}" method="post" class="d-grid">
                                        @csrf
                                        <input type="hidden" name="id_produk" value="{{ $hasilTani->id }}">
                                        <button class="btn btn-de-primary" type="submit">Add To Cart</button>
                                    </form>

                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid p-2">


    </div>
@endsection
