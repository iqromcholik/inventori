@extends('layouts.app', ['title' => 'Tambah Barang'])

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Barang</h6>
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input type="number" class="form-control @error('kode_barang') is-invalid @enderror"
                                name="kode_barang" id="kode_barang">
                            @error('kode_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror"
                                name="nama_barang" id="nama_barang">
                            @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <select class="form-select mb-3 @error('unit') is-invalid @enderror" name="unit"
                                id="unit">
                                <option value="">Pilih Unit</option>
                                <option value="Pcs" {{ old('unit') == 'Pcs' ? 'selected' : '' }}>Pcs</option>
                                <option value="Buah" {{ old('unit') == 'Buah' ? 'selected' : '' }}>Buah</option>
                                <option value="Lembar" {{ old('unit') == 'Lembar' ? 'selected' : '' }}>Lembar
                                </option>
                            </select>
                            @error('unit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <input type="text" class="form-control  @error('ukuran') is-invalid @enderror" name="ukuran"
                                id="ukuran">
                            @error('ukuran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="text" class="form-control  @error('warna') is-invalid @enderror" name="warna"
                                id="warna">
                            @error('warna')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <input type="text" class="form-control  @error('jenis') is-invalid @enderror" name="jenis"
                                id="jenis">
                            @error('jenis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga_satuan" class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control  @error('harga_satuan') is-invalid @enderror"
                                name="harga_satuan" id="harga_satuan">
                            @error('harga_satuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control  @error('stok') is-invalid @enderror" name="stok"
                                id="stok">
                            @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save me-2"></i>Simpan</button>
                        <button type="reset" class="btn btn-outline-primary m-2"><i
                                class="fa fa-eraser me-2"></i>Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
