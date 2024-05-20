<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $primaryKey = 'no_po';

    protected $fillable =
    [
        'no_po',
        'kode_barang',
        'nama_barang',
        'harga',
        'kuantity',
        'tgl_simpan'
    ];

    public function orderBarang()
    {
        return $this->belongsTo(OrderBarang::class, 'no_po', 'no_po');
    }

}
