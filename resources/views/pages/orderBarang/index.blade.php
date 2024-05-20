@extends('layouts.app', ['title' => 'Order Barang'])

@push('style')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <a href="{{ route('order.barang.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus me-2"></i>Order
            Barang</a>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Order Barang</h6>
            <div class="table-responsive">
                <table class="table" id="tbl-barang">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nomor PO</th>
                            <th scope="col">Kode Supplier</th>
                            <th scope="col">Nama Supplier</th>
                            <th scope="col">No. Telpon Supplier</th>
                            <th scope="col">Alamat Supplier</th>
                            <th scope="col">PPN</th>
                            <th scope="col">Order Detail</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderBarangs as $orderBarang)
                            <tr>
                                <td>{{ $orderBarang->tanggal }}</td>
                                <td>{{ $orderBarang->no_po }}</td>
                                <td>{{ $orderBarang->supplier->kode_supplier }}</td>
                                <td>{{ $orderBarang->supplier->nama_supplier }}</td>
                                <td>{{ $orderBarang->supplier->telpon }}</td>
                                <td>{{ $orderBarang->supplier->alamat }}</td>
                                <td>{{ $orderBarang->ppn }}</td>
                                <td><a href=""><i class="fa fa-cart-plus me-2"></i>Order Detail</a></td>
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
