<?php

namespace App\Livewire;

use Livewire\Component;

class ItemCard extends Component
{
    public function placeholder()
    {
        return view('skeleton.item-skeleton');
    }

    public function render()
    {
        return view('livewire.item-card');
    }
}
