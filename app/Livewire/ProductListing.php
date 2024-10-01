<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductListing extends Component
{
    public $products;

    public function mount($category_id, $current_product_id){

        $this->products = Product::query()->with('category')->where('id', '!=', $current_product_id);

        if($category_id == 0){
            $this->products = $this->products->limit(4)->orderBy('created_at', 'DESC')->get();
        }else{
            $this->products = $this->products->where('category_id', $category_id)->limit(4)->get();
        }
    }

    public function render()
    {
        return view('livewire.product-listing');
    }
}
