<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminNavigation extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.admin-navigation', compact('user'));
    }
}
