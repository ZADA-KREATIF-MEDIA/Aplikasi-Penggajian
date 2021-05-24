<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\UserRequest;
use File;

class PenggunaController extends Controller
{

    public function index()
    {
        $data['user'] = User::all();
        $data['roles'] = Role::pluck('name', 'name');
        return view('pengguna.index', $data);
    }

    public function store(UserRequest $request)
    {
        $requestData = $request->except('roles');
        $roles = $request->roles;
        if ($request->file('image')) {
            $destinationPath = public_path('upload/users/');
            $fileName = time() . '-' . str_slug($request->name) .'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($destinationPath, $fileName);
            $requestData['image'] = $fileName;
        }
        $user = User::create($requestData);
        $user->assignRole('admin');
        return redirect()->route('pengguna.index');
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->except('roles');
        $roles = $request->roles;
        $user = User::findOrFail($id);
        if ($request->file('image')) {
            $this->delete_image($user->image);
            $destinationPath = public_path('upload/users/');
            $fileName = time() . '-' . str_slug($request->name) .'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($destinationPath, $fileName);
            $requestData['image'] = $fileName;
        }
        $user->update($requestData);
        $user->syncRoles($roles);
        return redirect()->route('pengguna.index'); 
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->delete_image($user->image);
        return redirect()->route('pengguna.index');
    }

    public function delete_image($value='')
    {
        $image_path = public_path('upload/users/'. $value);
        if (File::exists($image_path) && $value != 'user.png') {
            File::delete($image_path);
        }
    }
}
