<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';
    protected $fillable = ['nama_produk', 'harga'];
}
