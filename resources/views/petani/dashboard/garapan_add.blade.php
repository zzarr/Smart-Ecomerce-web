@extends('petani.app')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Tambah Garapan Tani</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
                <div class="col-12 ">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        <div class="app-card-body">
                            <form action="{{ route('store_garapan') }}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Token CSRF untuk keamanan -->

                                <!-- Nama Tanaman -->
                                <div class="mb-3">
                                    <label for="nama_tanaman" class="form-label">Nama Tanaman</label>
                                    <input type="text" class="form-control" id="nama_tanaman" name="nama_tanaman"
                                        value="{{ old('nama_tanaman') }}" required>
                                    @error('nama_tanaman')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Deskripsi -->
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Harga Per Unit -->
                                <div class="mb-3">
                                    <label for="harga_per_unit" class="form-label">Harga Per Unit</label>
                                    <input type="number" class="form-control" id="harga_per_unit" name="harga_per_unit"
                                        value="{{ old('harga_per_unit') }}" required>
                                    @error('harga_per_unit')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tanggal Tanam -->
                                <div class="mb-3">
                                    <label for="tanggl_tanam" class="form-label">Tanggal Tanam</label>
                                    <input type="date" class="form-control" id="tanggl_tanam" name="tanggl_tanam"
                                        value="{{ old('tanggl_tanam') }}" required>
                                    @error('tanggl_tanam')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tanggal Panen -->
                                <div class="mb-3">
                                    <label for="tanggal_panen" class="form-label">Tanggal Panen</label>
                                    <input type="date" class="form-control" id="tanggal_panen" name="tanggal_panen"
                                        value="{{ old('tanggal_panen') }}" required>
                                    @error('tanggal_panen')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="{{ old('status') }}" required>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Kategori -->
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select name="kategori_id" id="" class="form-select">
                                        @foreach ($kategori as $item)
                                            <option value=">{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Photo -->
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input type="file" class="form-control" id="photo" name="photo"
                                        accept="image/*">
                                    @error('photo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>

                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div>
            </div>
        </div>
    </div>
@endsection
