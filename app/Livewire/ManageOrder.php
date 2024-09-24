<?php

namespace App\Livewire;

use Livewire\Component;

class ManageOrder extends Component
{
    public function render()
    {
        return view('livewire.manage-order')->layout('admin-layout');
    }
}
