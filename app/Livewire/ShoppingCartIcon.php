<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use Livewire\Attributes\On; 

class ShoppingCartIcon extends Component
{
    public $cartCount = 0;

    public function mount(){
        $this->updateCartCount();
    }

    #[On('cart-updated')] 
    public function updateCartCount(){
        $this->cartCount = ShoppingCart::where('user_id', Auth::id())->sum('quantity');
    }

    public function render()
    {
        return view('livewire.shopping-cart-icon');
    }
}
