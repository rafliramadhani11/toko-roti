<?php

namespace App\Livewire;

use Livewire\Component;

class BreadStockTable extends Component
{
    public $breads;

    public function render()
    {
        return view('livewire.bread-stock-table');
    }
}