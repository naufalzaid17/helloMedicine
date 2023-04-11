<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $title = "Register";
        return view('registrasi', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate ([
            'nama' => 'required|max:255',
            'username' => 'required|max:255|unique:customer',
            'email' => 'required|email:dns|unique:customer',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        customer::create($validatedData);

        return redirect('/login')->with('success', 'Registration was successful!');
    }
}
