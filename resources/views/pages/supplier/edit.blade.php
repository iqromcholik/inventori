@extends('layouts.app', ['title' => 'Edit Supplier'])

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Supplier</h6>
                    <form action="{{ route('supplier.update', $supplier->kode_supplier) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="kode_supplier" class="form-label">Kode Supplier</label>
                            <input type="number" class="form-control @error('kode_supplier') is-invalid @enderror"
                                name="kode_supplier" id="kode_supplier"
                                value="{{ old('kode_supplier') ?? $supplier->kode_supplier }}">
                            @error('kode_supplier')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_supplier" class="form-label">Nama Supplier</label>
                            <input type="text" class="form-control  @error('nama_supplier') is-invalid @enderror"
                                name="nama_supplier" id="nama_supplier"
                                value="{{ old('nama_supplier') ?? $supplier->nama_supplier }}">
                            @error('nama_supplier')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telpon" class="form-label">Telpon</label>
                            <input type="number" class="form-control  @error('telpon') is-invalid @enderror" name="telpon"
                                id="telpon" value="{{ old('telpon') ?? $supplier->telpon }}">
                            @error('telpon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="4">{{ old('alamat') ?? $supplier->alamat }}</textarea>
                            @error('alamat')
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
