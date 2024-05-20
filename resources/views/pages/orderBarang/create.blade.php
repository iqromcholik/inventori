@extends('layouts.app', ['title' => 'Tambah Order Barang'])

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Order Barang</h6>
                    <form action="{{ route('order.barang.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="no_po" class="form-label">Nomor PO</label>
                            <input type="number" class="form-control  @error('no_po') is-invalid @enderror" name="no_po"
                                id="no_po">
                            @error('no_po')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                                id="tanggal">
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kode_supplier" class="form-label">Kode Supplier</label>
                            <select class="form-select mb-3 @error('kode_supplier') is-invalid @enderror"
                                name="kode_supplier" id="kode_supplier">
                                <option value="">Pilih Kode Supplier</option>
                                @foreach ($kodeSuppliers as $supplier)
                                    <option value="{{ $supplier->kode_supplier }}"
                                        {{ old('kode_supplier') == $supplier->kode_supplier ? 'selected' : '' }}>
                                        {{ $supplier->kode_supplier }} - {{ $supplier->nama_supplier }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kode_supplier')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ppn" class="form-label">PPN</label>
                            <input type="number" class="form-control  @error('ppn') is-invalid @enderror" name="ppn"
                                id="ppn">
                            @error('ppn')
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
