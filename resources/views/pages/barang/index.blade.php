@extends('layouts.app', ['title' => 'List Barang'])

@push('style')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus me-2"></i>Tambah
            Barang</a>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">List Barang</h6>
            <div class="table-responsive">
                <table class="table" id="tbl-barang">
                    <thead>
                        <tr>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Harga Satuan</th>
                            <th scope="col">Stok</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->unit }}</td>
                                <td>{{ $barang->ukuran }}</td>
                                <td>{{ $barang->warna }}</td>
                                <td>{{ $barang->jenis }}</td>
                                <td>{{ $barang->harga_satuan }}</td>
                                <td>{{ $barang->stok }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('barang.edit', $barang->kode_barang) }}"
                                            class="btn btn-success btn-sm me-2"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('barang.destroy', $barang->kode_barang) }}" method="POST"
                                            class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <button class="btn btn-danger btn-sm" type="submit"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#tbl-barang');
    </script>
@endpush
