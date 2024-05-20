@extends('layouts.app', ['title' => 'Tambah Penerimaan Barang'])

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Penerimaan Barang</h6>
                    <form action="{{ route('penerimaan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tgl_penyimpanan" class="form-label">Tanggal Penyimpanan</label>
                            <input type="date" class="form-control @error('tgl_penyimpanan') is-invalid @enderror"
                                name="tgl_penyimpanan" id="tgl_penyimpanan">
                            @error('tgl_penyimpanan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="4"></textarea>
                            @error('alamat')
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
                            <label for="kuantity" class="form-label">Kuantity</label>
                            <input type="number" class="form-control  @error('kuantity') is-invalid @enderror"
                                name="kuantity" id="kuantity">
                            @error('kuantity')
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
