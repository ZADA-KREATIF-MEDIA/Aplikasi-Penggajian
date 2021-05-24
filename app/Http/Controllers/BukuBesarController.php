<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BukuBesarKas;
use App\BukuBesarGaji;

class BukuBesarController extends Controller
{
    public function index()
    {
        $data['bukuBesarKas'] = BukuBesarKas::all();
        $data['bukuBesarGaji'] = BukuBesarGaji::all();
        return view('bukubesar.index', $data);
    }
}
