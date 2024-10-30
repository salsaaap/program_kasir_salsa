<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penjualan',
        'id_produk',
        'jumlah_produk',
        'subtotal',
    ];
    public function DetailPenjualan()
    {
        return $this->hasMany(DetailPenjualan::class,'id_DetailPenjualan','id');
    }

}
