<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'kode_barang',
        'nama_barang',
        'unit',
        'ukuran',
        'warna',
        'jenis',
        'harga_satuan',
        'stok'
    ];

    public function penerimaanBarang()
    {
        return $this->hasMany(PenerimaanBarang::class);
    }

    public function pengeluaranBarang()
    {
        return $this->hasMany(pengeluaranBarang::class);
    }

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

}
