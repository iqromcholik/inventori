<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBarang extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'tanggal',
        'kode_supplier',
        'PPN',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }

}
