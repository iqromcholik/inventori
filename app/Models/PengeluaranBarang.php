<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranBarang extends Model
{
    use HasFactory;

    protected $table = 'pengeluaran_barangs';

    protected $fillable =
    [
        'tgl_keluar',
        'tujuan',
        'kuantity',
        'kode_barang',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }

}
