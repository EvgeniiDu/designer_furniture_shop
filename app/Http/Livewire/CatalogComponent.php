<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CatalogComponent extends Component
{
    public function render()
    {
        return view('livewire.catalog-component')->layout('layouts.base');
    }
}
