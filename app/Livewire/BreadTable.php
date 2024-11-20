<?php

namespace App\Livewire;

use Livewire\Component;

class BreadTable extends Component
{
    public $breads;
    public function render()
    {
        return view('livewire.bread-table');
    }
}
