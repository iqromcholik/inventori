<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailRequest;
use App\Http\Requests\UpdateOrderDetailRequest;
use App\Models\Barang;
use App\Models\OrderBarang;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return view('pages.orderDetail.index', compact('orderDetails'));
    }

    public function create()
    {
        $nomorPo = OrderBarang::all();
        $kodeBarangs = Barang::all();
        return view('pages.orderDetail.create', compact('nomorPo', 'kodeBarangs'));
    }

    public function store(OrderDetail $orderDetail, DetailRequest $detailRequest)
    {
        $data = $detailRequest->validated();

        // Ambil no_po dari data yang diterima
        $no_po = $data['no_po'];

        // Cari data order berdasarkan no_po untuk mendapatkan nilai PPN
        $order = OrderBarang::where('no_po', $no_po)->first();
        if ($order) {
            // Kalkulasi harga dengan PPN
            $ppn = $order->ppn; // Asumsikan nilai PPN adalah persentase (misalnya 10 untuk 10%)
            $data['harga'] = $data['harga'] * (1 + $ppn / 100);
        }

        $orderDetail->create($data);
        return redirect(route('order.detail.index'));
    }

    public function edit(OrderDetail $orderDetail)
    {
        $nomorPo = OrderBarang::all();
        $kodeBarangs = Barang::all();
        return view('pages.orderDetail.edit', compact('orderDetail', 'nomorPo', 'kodeBarangs'));
    }

    public function update(OrderDetail $orderDetail, UpdateOrderDetailRequest $updateOrderDetailRequest)
    {
        $data = $updateOrderDetailRequest->validated();

         // Ambil no_po dari data yang diterima
        $no_po = $data['no_po'];

        // Cari data order berdasarkan no_po untuk mendapatkan nilai PPN
        $order = OrderBarang::where('no_po', $no_po)->first();
        if ($order) {
            // Kalkulasi harga dengan PPN
            $ppn = $order->ppn; // Asumsikan nilai PPN adalah persentase (misalnya 10 untuk 10%)
            $data['harga'] = $data['harga'] * (1 + $ppn / 100);
        }
        $orderDetail->update($data);
        return redirect(route('order.detail.index'));
    }

    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();
        return redirect(route('order.detail.index'));
    }
}
