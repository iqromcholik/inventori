<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanBarang extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'tgl_penyimpanan',
        'alamat',
        'kode_barang',
        'kuantity'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

}
