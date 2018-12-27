<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	protected $table = 'reports';
    protected $fillable = [
        'name', 'no_ktp', 'email', 'no_tlp', 'harga', 'tgl_kejadian', 'alamat', 'ket'
    ];
}
