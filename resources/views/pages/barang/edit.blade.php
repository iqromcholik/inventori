@extends('layouts.app', ['title' => 'Edit Barang'])

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Barang</h6>
                    <form action="{{ route('barang.update', $barang->kode_barang) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input type="number" class="form-control @error('kode_barang') is-invalid @enderror"
                                name="kode_barang" id="kode_barang"
                                value="{{ old('kode_barang') ?? $barang->kode_barang }}">
                            @error('kode_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror"
                                name="nama_barang" id="nama_barang"
                                value="{{ old('nama_barang') ?? $barang->nama_barang }}">
                            @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <select class="form-select mb-3 @error('unit') is-invalid @enderror" name="unit"
                                id="unit">
                                <option value="">Pilih Unit</option>
                                <option value="Pcs" {{ $barang->unit == 'Pcs' ? 'selected' : '' }}>Pcs</option>
                                <option value="Buah" {{ $barang->unit == 'Buah' ? 'selected' : '' }}>Buah</option>
                                <option value="Lembar" {{ $barang->unit == 'Lembar' ? 'selected' : '' }}>Lembar
                                </option>
                            </select>
                            @error('unit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <input type="text" class="form-control  @error('ukuran') is-invalid @enderror" name="ukuran"
                                id="ukuran" value="{{ old('ukuran') ?? $barang->ukuran }}">
                            @error('ukuran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="text" class="form-control  @error('warna') is-invalid @enderror" name="warna"
                                id="warna" value="{{ old('warna') ?? $barang->warna }}">
                            @error('warna')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <input type="text" class="form-control  @error('jenis') is-invalid @enderror" name="jenis"
                                id="jenis" value="{{ old('jenis') ?? $barang->jenis }}">
                            @error('jenis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga_satuan" class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control  @error('harga_satuan') is-invalid @enderror"
                                name="harga_satuan" id="harga_satuan"
                                value="{{ old('harga_satuan') ?? $barang->harga_satuan }}">
                            @error('harga_satuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control  @error('stok') is-invalid @enderror" name="stok"
                                id="stok" value="{{ old('stok') ?? $barang->stok }}">
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
