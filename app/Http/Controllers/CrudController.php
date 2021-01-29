<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tiket;

class CrudController extends Controller
{
    public function tampiltiket() {
        $datatiket = tiket::orderBy('paket', 'asc')->paginate(5);
        return view('/tiket/tiket', ['tiket' => $datatiket]);
    }
}
