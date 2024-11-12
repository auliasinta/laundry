<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    protected $fillable = [
        'id_transaksi',
        'id_paket',
        'qty',
        'keterangan',

    ];

    protected $table = 'detail_transaksi';
}
