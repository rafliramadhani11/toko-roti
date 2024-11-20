<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Bread;
use App\Models\Stock;
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

    public function createBread()
    {
        return view('admin.create');
    }

    public function storeBread(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);
        Bread::create([
            'name' => $validated['name'],
            'created_at' => now()->format('Y-m-d')
        ]);

        return redirect()->route('admin.app')->with('breadCreated', 'Berhasil menambahkan stok baru');
    }

    public function updatedBread(Bread $bread, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3'
        ]);
        $bread->fill([
            'name' => $validated['name']
        ]);
        if ($bread->isDirty()) {
            $bread->push();
            return back()->with('breadUpdated', 'Nama Roti berhasil di ganti');
        }
        return back();
    }

    public function detailBread(Bread $bread)
    {
        return view('admin.detail', compact('bread'));
    }

    public function deleteBread(Bread $bread)
    {
        $bread->delete();

        return back()->with('deleteSuccess', 'Berhasil menghapus data roti ');
    }

    // STOCK
    public function stockCreated(Request $request, Bread $bread)
    {
        $validated = $request->validate([
            'quantity' => 'required|numeric',
            'created_at' => 'required|date',
        ]);

        Stock::create([
            'bread_id' => $bread->id,
            'quantity' => $validated['quantity'],
            'created_at' => $validated['created_at'],
            'updated_at' => null,
        ]);
        return back()->with('stockCreated', 'Berhasil membuat stok baru');
    }

    public function stockUpdated(Request $request, Stock $stock)
    {
        $validated = $request->validate([
            'quantity' => 'numeric'
        ]);
        $stock->update([
            'quantity' => $validated['quantity'],
        ]);
        return back()->with('stockUpdated', 'Berhasil mengubah data stok');
    }

    public function stockDeleted(Stock $stock)
    {
        $stock->delete();
        return back()->with('stockDeleted', 'Stok berhasil di hapus');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('guest.login');
    }
}
