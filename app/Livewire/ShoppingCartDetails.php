<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 

class ShoppingCartDetails extends Component
{
    public $cartItems = [];

    public $subtotal;
    public $vat;
    public $discount;
    public $total;


    public function mount(){
        $this->getCartItems();
        $this->calculateTotals();
    }

    public function addToCart($product_id){
        
        $cardItem = ShoppingCart::where('user_id', Auth::id())->where('product_id', $product_id)->first();

        if($cardItem){
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

    public function updateQuantity($cardItemId, $quantity){
        $cartItem = ShoppingCart::find($cardItemId);
        if($cartItem){
            $cartItem->quantity = $quantity;
            $cartItem->save();
            $this->dispatch('cart-updated');
        }
    }

    public function removeItem($cardItemId){
        $cartItem = ShoppingCart::find($cardItemId);
        if($cartItem){
            $cartItem->delete();
            $this->dispatch('cart-updated');
        }
    }

    public function getCartItems() {
        return ShoppingCart::with('product')->where('user_id', Auth::id())->get();
    }

    public function calculateTotals(){

        $this->subtotal = collect($this->cartItems)->sum(function($item) {
            return $item->quantity * $item->product->price;
        });
        $this->vat = $this->subtotal * 0.1; // 10% VAT example
        $this->discount = 5; // Apply your discount logic here
        $this->total = $this->subtotal + $this->vat - $this->discount;
    }


    #[On('cart-updated')] 
    public function render()
    {
        $this->cartItems = $this->getCartItems();
        $this->calculateTotals();
        return view('livewire.shopping-cart-details', ['cartItems' => $this->cartItems]);
    }
}
