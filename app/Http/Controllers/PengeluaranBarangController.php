<?php

namespace App\Http\Controllers;

use App\Http\Requests\PengeluaranRequest;
use App\Models\Barang;
use App\Models\PengeluaranBarang;
use Illuminate\Http\Request;

class PengeluaranBarangController extends Controller
{
    public function index()
    {
        $pengeluarans = PengeluaranBarang::all()->sortByDesc('created_at');
        return view('pages.pengeluaran.index', compact('pengeluarans'));
    }

    public function create()
    {
        $kodeBarangs = Barang::all();
        return view('pages.pengeluaran.create', compact('kodeBarangs'));
    }

    public function store(PengeluaranBarang $pengeluaranBarang, PengeluaranRequest $pengeluaranRequest)
    {
        $data = $pengeluaranRequest->validated();

        // Temukan barang yang sesuai berdasarkan kode barang pada data penerimaan
        $barang = Barang::where('kode_barang', $data['kode_barang'])->first();

        // Jika barang ditemukan, perbarui stok barang
        if ($barang) {
            $barang->stok -= $data['kuantity'];
            $barang->save();
        }

        $pengeluaranBarang->create($data);
        return redirect(route('pengeluaran.index'));
    }
}
