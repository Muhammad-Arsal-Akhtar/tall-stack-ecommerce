<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use App\Models\Product;

class AddProductForm extends Component
{
    use WithFileUploads;

    public $currentURL;

    #[Validate('required')] 
    public $name;

    #[Validate('required|integer')] 
    public $price;

    #[Validate('required')] 
    public $description;

    #[Validate('required|image|max:1024|mime:jpg,png')]
    public $photo;


    public function render()
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $this->currentURL = $segments[0].' '.$segments[1];
        return view('livewire.add-product-form')->layout('admin-layout');
    }

    public function saveNewProduct(){
        
        $this->validate();

        $product = new Product;
        $product->name = $this->name;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->image = $this->photo;
        $product->category_id = $this->name;
        $product->save();

        return $this->redirect('/admin/products', navigate: true);
    }

}
