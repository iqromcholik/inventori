<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBarang extends Model
{
    use HasFactory;

    protected $table = 'order_barangs';

    protected $fillable =
    [
        'no_po',
        'tanggal',
        'kode_supplier',
        'ppn',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'kode_supplier', 'kode_supplier');
    }

    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }

}
