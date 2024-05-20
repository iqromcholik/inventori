<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\UpdateOrderBarangRequest;
use App\Models\OrderBarang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class OrderBarangController extends Controller
{
    public function index()
    {
        $orderBarangs = OrderBarang::all();
        return view('pages.orderBarang.index', compact('orderBarangs'));
    }

    public function create()
    {
        $kodeSuppliers = Supplier::all();
        return view('pages.orderBarang.create', compact('kodeSuppliers'));
    }

    public function store(OrderBarang $orderBarang, OrderRequest $orderRequest)
    {
        $data = $orderRequest->validated();
        $orderBarang->create($data);
        return redirect(route('order.barang.index'));
    }

    public function edit(OrderBarang $orderBarang)
    {
        $kodeSuppliers = Supplier::all();
        return view('pages.orderBarang.edit', compact('orderBarang', 'kodeSuppliers'));
    }

    public function update(OrderBarang $orderBarang, UpdateOrderBarangRequest $updateOrderBarangRequest)
    {
        $data = $updateOrderBarangRequest->validated();
        $orderBarang->update($data);
        return redirect(route('order.barang.index'));
    }

    public function destroy(OrderBarang $orderBarang)
    {
        $orderBarang->delete();
        return redirect(route('order.barang.index'));
    }
}
