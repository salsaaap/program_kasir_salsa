<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
    ];
    public function Produk()
    {
        return $this->hasMany(Produk::class,'id_produk','id');
    }

}


