@extends('petani.app')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Orders</h1>
                </div>

            </div><!--//row-->
            <div class="row">
                <div class="col-12">
                    <div class="col-auto">
                        <div class="tab-content">
                            <div class="app-card app-card-orders-table shadow-sm mb-5 p-4">
                                <div class="app-card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="{{ route('add_kategori') }}" class="btn btn-primary text-white"><i
                                                    class="ti ti-circle-plus"></i>Tambah
                                                data</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="datatable_1" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kategori</th>
                                                            <th class="text-right">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1; // Initialize the counter before the loop
                                                        @endphp

                                                        @foreach ($kategori as $item)
                                                            <tr>
                                                                <td style="width: 100px;">{{ $no }}</td>
                                                                <!-- Display the current row number -->
                                                                <td>{{ $item->nama_kategori }}</td>
                                                                <td class="text-right" style="width: 100px;">
                                                                    <div class="button-items">
                                                                        <button type="button"
                                                                            class="btn btn-outline-danger btn-sm">
                                                                            <i class="ti ti-trash"></i>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-info circle btn-sm">
                                                                            <i class="ti ti-edit"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            @php
                                                                $no++; // Increment the counter after each iteration
                                                            @endphp
                                                        @endforeach

                                                        <!-- Tambahkan baris data lainnya di sini -->
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('metrica/libs/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('metrica/css/app.min.css') }}">
    <link href="{{ asset('metrica/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />
@endpush

@push('js')
    <script src="{{ asset('metrica/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('metrica/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('metrica/js/pages/datatable.init.js') }}"></script>
    <script src="{{ asset('metrica/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endpush
