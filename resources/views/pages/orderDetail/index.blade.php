@extends('layouts.app', ['title' => 'Order Detail'])

@push('style')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <a href="{{ route('order.detail.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus me-2"></i>Order
            Detail</a>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Order Detail</h6>
            <div class="table-responsive">
                <table class="table" id="tbl-barang">
                    <thead>
                        <tr>
                            <th scope="col">Nomor PO</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">PPN</th>
                            <th scope="col">Kuantity</th>
                            <th scope="col">Tanggal Simpan</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderDetails as $orderDetail)
                            <tr>
                                <td>{{ $orderDetail->no_po }}</td>
                                <td>{{ $orderDetail->kode_barang }}</td>
                                <td>{{ $orderDetail->nama_barang }}</td>
                                <td>{{ $orderDetail->harga }}</td>
                                <td>{{ $orderDetail->orderBarang->ppn }}%</td>
                                <td>{{ $orderDetail->kuantity }}</td>
                                <td>{{ $orderDetail->tgl_simpan }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('order.detail.edit', $orderDetail->no_po) }}"
                                            class="btn btn-success btn-sm me-2"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('order.detail.destroy', $orderDetail->no_po) }}"
                                            method="POST" class="d-inline">
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
