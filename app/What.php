<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class What extends Model
{
    protected $fillable = [
        'image', 'text',
    ];
}
