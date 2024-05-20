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
        $penerimaans = PenerimaanBarang::all();
        return view('pages.penerimaan.index', compact('penerimaans'));
    }

    public function create()
    {
        $kodeBarangs = Barang::all();
        return view('pages.penerimaan.create', compact('kodeBarangs'));
    }

    public function store(PenerimaanBarang $penerimaanBarang, PenerimaanRequest $request)
    {
        $data = $request->validated();
        $penerimaanBarang->create($data);
        return redirect(route('penerimaan.index'));
    }
}
