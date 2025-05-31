<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Controller extends Controller
{
 
    public function register(): Factory|View
    {
        return view(view: "register");
    }

    public function registerPost(Request $request): RedirectResponse
    {
        $request->validate(rules: [
            'nama' =>
            'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'nullable',
            'foto'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8',
        ]);

        $input = $request->all();
        $input ('password') = bcrypt($input['password']);
        $input ('foto') = null;
        if ($request->hasFile('foto'));
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtention();
            $file->move(public_path('uploads'), $filename);
            $input['foto'] = 'uploads/users/' . $filename;

    }
