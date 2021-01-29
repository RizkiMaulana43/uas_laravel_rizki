<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    protected $stable='tb_tiket';
    protected $fillable=['paket', 'jumlah', 'harga'];
}
