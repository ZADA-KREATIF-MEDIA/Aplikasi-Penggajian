<?php

namespace App\Http\Controllers;

use App\Pinjaman;
use App\User;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{

    public function index()
    {
        $data['user'] = User::all();
        $data['pinjaman'] = Pinjaman::all();
        return view('pinjaman.index', $data);
    }

    public function store(Request $request)
    {
        Pinjaman::create($request->all());
        return redirect()->route('pinjaman.index');
    }

    public function update(Request $request, Pinjaman $pinjaman)
    {
        User::find($id)->fill($request->except('password'))->save();
        Session::flash('message', 'Update Karyawan berhasil.'); 
        return redirect()->route('karyawan.index'); 
    }

    public function destroy(Pinjaman $pinjaman)
    {
        $pinjaman->delete();
        return redirect()->back(); 
    }
}
