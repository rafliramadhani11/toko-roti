<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GuestNavigation extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.guest-navigation', compact('user'));
    }
}
