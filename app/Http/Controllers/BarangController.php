<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('pages.barang.index');
    }

    public function create()
    {
        return view('pages.barang.create');
    }
}
