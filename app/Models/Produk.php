<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Untuk memberi tahu Laravel agar merujuk pada tabel Produk bukan Produks
    protected $table = 'produk';
    // use HasFactory;
}
