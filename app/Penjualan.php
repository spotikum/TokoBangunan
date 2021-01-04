<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['tanggal', 'total_penjualan', 'status'];

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
