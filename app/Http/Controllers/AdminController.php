<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function app()
    {
        $user = Auth::user();
        $breads = Bread::orderBy('created_at', 'desc')->get();
        return view('admin.app', compact('user', 'breads'));
    }

    public function createStock()
    {
        return view('admin.create');
    }

    public function deleteStock(Bread $bread)
    {
        $bread->delete();
        return back()->with('deleteSuccess', 'Berhasil menghapus data stock ');
    }

    public function stockUpdated(Request $request, Bread $bread)
    {
        dd($request);
        $validated = $request->validate([
            'name' => 'min:3',
            'quantity' => 'numeric',
            'created_at' => 'date',
            'updated_at' => 'date'
        ]);

        if ($bread->only(array_keys($validated)) == $validated) {
            return back();
        } else {
            $bread->update($validated);
            return back()->with('stockUpdated', 'Data stok berhasil di pebarui !');
        }
    }
}
