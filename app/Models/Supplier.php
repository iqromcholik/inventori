<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primaryKey = 'kode_supplier';

    protected $fillable =
    [
        'kode_supplier',
        'nama_supplier',
        'telpon',
        'alamat',
    ];

    public function orderBarang()
    {
        return $this->hasMany(OrderBarang::class);
    }

}
