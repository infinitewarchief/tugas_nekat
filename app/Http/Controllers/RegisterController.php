<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunPeserta;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register'); // Pastikan nama file blade yang sesuai
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:akun_peserta',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new AkunPeserta();
        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }
}