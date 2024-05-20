<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('pages.barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('pages.barang.create');
    }

    public function store(Barang $barang, BarangRequest $barangRequest)
    {
        $data = $barangRequest->validated();
        $barang->create($data);
        return redirect(route('barang.index'));
    }

    public function edit(Barang $barang)
    {
        return view('pages.barang.edit', compact('barang'));
    }

    public function update(Barang $barang, UpdateBarangRequest $updateBarangRequest)
    {
        $data = $updateBarangRequest->validated();
        $barang->update($data);
        return redirect(route('barang.index'));
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect(route('barang.index'));
    }
}
