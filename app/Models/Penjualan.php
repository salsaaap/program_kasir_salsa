<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_penjualan',
        'total_harga',
        'pelanggan_id',
    ];
    public function Penjualan()
    {
        return $this->hasMany(Penjualan::class,'id_Penjualan','id');
    }

}
