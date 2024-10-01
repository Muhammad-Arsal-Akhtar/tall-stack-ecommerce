<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 


class ProductDetails extends Component
{
    public $product;

    public function mount($product_id){
        $this->product = Product::with('category')->find($product_id);
    }

    public function addToCart($product_id){
        
        $cardItem = ShoppingCart::where('user_id', Auth::id())->where('product_id', $product_id)->first();

        if($cardItem->isNotEmpty()){
            $cardItem->quantity = $cardItem->quantity + 1;
            $cardItem->save();
        }else{
            ShoppingCart::create([
                'user_id' => Auth::id(),
                'product_id' => $product_id,
                'quantity' => 1
            ]);
        }

        $this->dispatch('cart-updated');
    }

    public function render()
    {
        return view('livewire.product-details');
    }
}
