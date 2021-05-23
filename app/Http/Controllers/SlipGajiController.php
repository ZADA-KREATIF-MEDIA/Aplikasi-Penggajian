<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lembur;
use Illuminate\Support\Facades\DB;

class SlipGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['karyawan'] = User::role('karyawan')->whereId(auth()->user()->id)->get();

        return view('penggajian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $month_now = date('m');
        $data['karyawan'] = User::find($id);
        $lembur = DB::table('lemburs')->where('user_id',$id)->whereMonth('tanggal',$month_now)->get();
        $data['lembur'] = $lembur->sum('lama_lembur');
        $masuk = DB::table('absensis')->where('user_id',$id)->where('status','Masuk')->whereMonth('tanggal',$month_now)->get();
        $data['masuk'] = $masuk->count();
        return view('slipgaji.cetak', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
