@extends('petani.app')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Tambah Kategoti</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
                <div class="col-12 ">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        <div class="app-card-body">
                            <form class="settings-form" action="{{ route('add_kategori') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" id="setting-input-1" name="nama_kategori"
                                        required="">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="" class="btn btn-danger">cancel</a>
                            </form>
                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div>
            </div>
        </div>
    </div>
@endsection
