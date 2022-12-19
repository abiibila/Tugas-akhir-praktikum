<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4|max:255|'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']); // cara ke 2 bisa lihat di dokumentasi laravel bagian Hashing

        User::create($validatedData);

        return redirect('/');
    }
}
