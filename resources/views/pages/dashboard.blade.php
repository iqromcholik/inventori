@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="container-fluid pt-4 px-4 min-vh-100">
        <div class="row g-4">
            <div class="col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-box fa-3x text-primary"></i>
                    <div class="ms-2">
                        <p class="mb-2">Total Barang</p>
                        <h6 class="mb-0">{{ $totalBarang }} Barang</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-truck-ramp-box fa-3x text-primary"></i>
                    <div class="ms-2">
                        <p class="mb-2">Total Penerimaan Barang</p>
                        <h6 class="mb-0">{{ $totalPenerimaanBarang }} Barang</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-boxes-packing fa-3x text-primary"></i>
                    <div class="ms-2">
                        <p class="mb-2">Total Pengeluaran Barang</p>
                        <h6 class="mb-0">0 Barang</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
