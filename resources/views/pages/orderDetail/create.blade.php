@extends('layouts.app', ['title' => 'Tambah Order Detail'])

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Order Detail</h6>
                    <form action="{{ route('order.detail.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="no_po" class="form-label">Nomor PO</label>
                            <select class="form-select mb-3 @error('no_po') is-invalid @enderror" name="no_po"
                                id="no_po">
                                <option value="">Pilih Nomor PO</option>
                                @foreach ($nomorPo as $noPo)
                                    <option value="{{ $noPo->no_po }}"
                                        {{ old('no_po') == $noPo->no_po ? 'selected' : '' }}>
                                        {{ $noPo->no_po }}
                                    </option>
                                @endforeach
                            </select>
                            @error('no_po')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <select class="form-select mb-3 @error('kode_barang') is-invalid @enderror" name="kode_barang"
                                id="kode_barang">
                                <option value="">Pilih Kode Barang</option>
                                @foreach ($kodeBarangs as $barang)
                                    <option value="{{ $barang->kode_barang }}"
                                        {{ old('kode_barang') == $barang->kode_barang ? 'selected' : '' }}>
                                        {{ $barang->kode_barang }} - {{ $barang->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
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
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control  @error('harga') is-invalid @enderror" name="harga"
                                id="harga">
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kuantity" class="form-label">Kuantity</label>
                            <input type="number" class="form-control  @error('kuantity') is-invalid @enderror"
                                name="kuantity" id="kuantity">
                            @error('kuantity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tgl_simpan" class="form-label">Tanggal Simpan</label>
                            <input type="date" class="form-control  @error('tgl_simpan') is-invalid @enderror"
                                name="tgl_simpan" id="tgl_simpan">
                            @error('tgl_simpan')
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
