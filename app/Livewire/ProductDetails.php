<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetails extends Component
{
    public $product;

    public function mount($product_id){
        $this->product = Product::with('category')->find($product_id);
    }

    public function render()
    {
        return view('livewire.product-details');
    }
}
