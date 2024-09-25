<?php

namespace App\Livewire;

use Livewire\Component;

class AddCategoryForm extends Component
{
    public $currentURL;

    public function render()
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $this->currentURL = $segments[0].' '.$segments[1];
        return view('livewire.add-category-form')->layout('admin-layout');
    }
}
