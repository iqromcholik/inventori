<?php

namespace App\Http\Controllers;

use App\Http\Requests\PenerimaanRequest;
use App\Models\Barang;
use App\Models\PenerimaanBarang;
use Illuminate\Http\Request;

class PenerimaanBarangController extends Controller
{
    public function index()
    {
        $penerimaans = PenerimaanBarang::all()->sortByDesc('created_at');
        return view('pages.penerimaan.index', compact('penerimaans'));
    }

    public function create()
    {
        $kodeBarangs = Barang::all();
        return view('pages.penerimaan.create', compact('kodeBarangs'));
    }

    public function store(PenerimaanBarang $penerimaanBarang, PenerimaanRequest $penerimaanRequest)
    {
        $data = $penerimaanRequest->validated();

        // Temukan barang yang sesuai berdasarkan kode barang pada data penerimaan
        $barang = Barang::where('kode_barang', $data['kode_barang'])->first();

        // Jika barang ditemukan, perbarui stok barang
        if ($barang) {
            $barang->stok += $data['kuantity'];
            $barang->save();
        }

        $penerimaanBarang->create($data);
        return redirect(route('penerimaan.index'));
    }
}
