<?php

namespace App\Livewire;

use Livewire\Component;


class AdminDashboard extends Component
{
    public $currentURL;
    
    public function render()
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $this->currentURL = $segments[0].' '.$segments[1];
        return view('livewire.admin-dashboard')->layout('admin-layout');
    }
}
