<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $nama = trim($request->input('nama'));

        $user = User::where('nama', $nama)->first();

        if ($user) {
            Session::put('id_user', $user->id_user);
            Session::put('nama', $user->nama);
        } else {
            $user = User::create(['nama' => $nama]);
            Session::put('id_user', $user->id_user);
            Session::put('nama', $user->nama);
        }

        return redirect()->route('tentang.index');
    }
}
