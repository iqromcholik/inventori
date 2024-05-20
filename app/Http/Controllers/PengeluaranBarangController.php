<?php

namespace App\Http\Controllers;

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
        return view('pages.pengeluaran.create');
    }
}
