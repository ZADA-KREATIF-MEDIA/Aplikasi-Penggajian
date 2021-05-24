<?php

namespace App\Http\Controllers;

use App\Divisi;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\DivisiRequest;

class DivisiController extends Controller
{
    public function index()
    {
        $data['divisi'] = Divisi::all();
        return view('divisi.index', $data);
    }

    public function store(DivisiRequest $request)
    {
        Divisi::create($request->all());
        return redirect()->route('divisi.index');
    }

    public function update(DivisiRequest $request, Divisi $divisi)
    {
        $divisi->fill($request->all())->save();
        Session::flash('message', 'Update Divisi berhasil.'); 
        return redirect()->route('divisi.index'); 
    }

    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return redirect()->back();  
    }
}
