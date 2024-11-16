<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function app()
    {
        $user = Auth::user();

        return view('admin.app', compact('user'));
    }
}
