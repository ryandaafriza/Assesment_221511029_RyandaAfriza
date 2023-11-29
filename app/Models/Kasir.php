<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $table = 'kasirs'; // Nama tabel dalam database

    protected $primaryKey = 'KodeKasir'; // Kolom yang digunakan sebagai primary key

    protected $fillable = [
        'KodeKasir',
        'Nama',
        'HP',
    ];

    // Tambahkan metode atau relasi jika diperlukan
}
