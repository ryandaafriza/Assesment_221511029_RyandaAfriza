<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'KodeBarang';
    protected $fillable = ['NamaBarang', 'Satuan', 'HargaSatuan', 'Stok'];
}