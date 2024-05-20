@extends('layouts.app', ['title' => 'Pengeluaran Barang'])

@push('style')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <a href="{{ route('pengeluaran.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus me-2"></i>Tambah
            Pengeluaran Barang</a>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Pengeluaran Barang</h6>
            <div class="table-responsive">
                <table class="table" id="tbl-barang">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal Keluar </th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga Satuan</th>
                            <th scope="col">Kuantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengeluarans as $pengeluaran)
                            <tr>
                                <td>{{ $pengeluaran->tgl_keluar }}</td>
                                <td>{{ $pengeluaran->tujuan }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-success btn-sm me-2"><i class="fa fa-edit"></i></a>
                                        <form action="" method="POST" class="d-inline">
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
