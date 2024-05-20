<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\PenerimaanBarang;
use App\Models\PengeluaranBarang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total barang
        $totalBarang = Barang::count();

        // Menghitung total penerimaan barang berdasarkan tanggal
        $tanggalSekarang = now()->toDateString();
        $totalPenerimaanBarang = PenerimaanBarang::whereDate('tgl_penyimpanan', $tanggalSekarang)->count();

        // Menghitung total pengeluaran barang berdasarkan tanggal
        $totalPengeluaranBarang = PengeluaranBarang::whereDate('tgl_keluar', $tanggalSekarang)->count();

        return view('pages.dashboard', compact('totalBarang', 'totalPenerimaanBarang', 'totalPengeluaranBarang'));
    }
}
