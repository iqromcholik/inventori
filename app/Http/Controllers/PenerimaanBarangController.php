<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerimaanBarangController extends Controller
{
    public function index()
    {
        return view('pages.penerimaan.index');
    }
}
