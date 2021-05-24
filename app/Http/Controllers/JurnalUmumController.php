<?php

namespace App\Http\Controllers;

use App\JurnalUmum;
use Illuminate\Http\Request;

class JurnalUmumController extends Controller
{
    public function index()
    {
        $data['jurnalUmum'] = JurnalUmum::all();
        return view('jurnalumum.index', $data);
    }
}
