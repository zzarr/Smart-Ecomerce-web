@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li><!--end nav-item-->

                            <li class="breadcrumb-item active">Keranjang</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Keranjang</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">list produk</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <p class="mb-4 text-muted"></p>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($cart as $item)
                                            <td>
                                                <img src="{{ asset($item->photo) }}" alt="" height="40"
                                                    class="me-2">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href=""
                                                        class="d-inline-block align-middle mb-0 product-name">{{ $item->nama_tanaman }}</a>

                                                </p>
                                            </td>
                                            <td>{{ $item->harga_per_unit }}/Kg</td>
                                            <td>
                                                <input class="form-control w-25" type="number" value="1"
                                                    id="example-number-input1">
                                            </td>
                                            <td>Rp. 10.000,00</td>
                                            <td>
                                                <a href="" class="text-dark"><i
                                                        class="mdi mdi-close-circle-outline font-18"></i></a>
                                            </td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="" class="text-primary"><i
                                                class="fas fa-long-arrow-alt-left me-1"></i> Continue Shopping</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="ecommerce-checkout.html" class="text-primary">Checkout <i
                                                class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                    </div><!--end row-->
                </div><!--end card-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->

    </div>
@endsection
