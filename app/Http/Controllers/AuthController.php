<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function auth(LoginRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('admin.app');
        }

        return back()->withErrors([
            'Data yang dimasukan tidak terdaftar'
        ])->onlyInput('email');
    }
}
