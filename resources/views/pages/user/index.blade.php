@extends('layouts.app', ['title' => 'List User'])

@push('style')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus me-2"></i>Tambah User</a>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">List User</h6>
            <div class="table-responsive">
                <table class="table" id="tbl-users">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-sm me-2"><i
                                                class="fa fa-edit"></i></a>
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
        new DataTable('#tbl-users');
    </script>
@endpush
