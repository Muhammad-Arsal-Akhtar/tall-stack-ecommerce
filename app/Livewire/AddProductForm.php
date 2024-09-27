<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Category;

class AddProductForm extends Component
{
    use WithFileUploads;

    public $currentURL;

    #[Validate('required')] 
    public $name;

    #[Validate('required|numeric')] 
    public $price;

    #[Validate('required')] 
    public $description;

    #[Validate('nullable|image|max:1024|mimes:jpeg,png')]
    public $photo;

    #[Validate('required')] 
    public $category_id;

    public $categories;

    public function mount(){
        $this->categories = Category::all();
    }

    public function render()
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $this->currentURL = $segments[0].' '.$segments[1];
        return view('livewire.add-product-form')->layout('admin-layout');
    }

    public function saveNewProduct(){
        
        $this->validate();

        $path = $this->photo->store('photos', 'public');

        $product = new Product;
        $product->name = $this->name;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->image = $path;
        $product->category_id = $this->category_id;
        $product->save();

        return $this->redirect('/admin/products', navigate: true);
    }

}
