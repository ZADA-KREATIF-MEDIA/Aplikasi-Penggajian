<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\KaryawanRequest;
use Session;
use File;

class KaryawanController extends Controller
{
    public function index()
    {
        $data['karyawan'] = User::role('karyawan')->get();
        return view('karyawan.index', $data);
    }

    public function store(KaryawanRequest $request)
    {
        $requestData = $request->except('roles');
        $user = User::create($requestData);
        $user->assignRole('karyawan');
        return redirect()->route('karyawan.index');
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->except('password'); 
        $user = User::findOrFail($id);
        if ($request->file('image')) {
            $this->delete_image($user->image);       
            $destinationPath = public_path('upload/users/');
            $fileName = time() . '-' . str_slug($request->name) .'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($destinationPath, $fileName);
            $requestData['image'] = $fileName;
        }
        $user->update($requestData);
        return redirect()->route('karyawan.index'); 
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->delete_image($user->image);
        return redirect()->back();  
    }

    public function delete_image($value='')
    {
        $image_path = public_path('upload/users/'. $value);
        if (File::exists($image_path) && $value != 'user.png') {
            File::delete($image_path);
        }
    }

    public function trash()
    {
        $pengguna = User::onlyTrashed()->get();
        return view('karyawan/pengguna_trash', ['pengguna' => $pengguna]);
    }
    public function restore($id)
    {
        $pengguna= User::onlyTrashed()->where('id',$id);
        $pengguna->restore();
        return redirect()->route('karyawan.index');
    }
    public function force_delete($id)
    {
        $pengguna= User::onlyTrashed()->where('id',$id);
        $pengguna->forceDelete();
        return redirect()->route('karyawan.index');
    }
}
