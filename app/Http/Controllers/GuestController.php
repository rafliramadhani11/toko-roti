<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }

    public function product()
    {
        return view('guest.product');
    }
    public function tentangKami()
    {
        return view('guest.tentangKami');
    }
}
