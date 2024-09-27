<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use App\Models\Product;

class EditProduct extends Component
{
    use WithFileUploads;

    public $categories;

    #[Validate('required')] 
    public $name;

    #[Validate('required|numeric')] 
    public $price;

    #[Validate('required')] 
    public $description;

    #[Validate('required|image|max:1024|mimes:jpeg,png')]
    public $photo;

    #[Validate('required')] 
    public $category_id;

    public $productDetails;

    public function mount($id){
        $this->productDetails = Product::find($id);
        $this->name = $this->productDetails->name;
        $this->price = $this->productDetails->price;
        $this->description = $this->productDetails->description;
        $this->category_id = $this->productDetails->category_id;
        $this->photo = $this->productDetails->image;

        $this->categories = Category::all();
    }

    public function updateProduct(){

        if($this->photo && !is_string($this->photo)){
            $imagePath = $this->photo->store('photos', 'public');
        }else{
            $imagePath = $this->photo;
        }

        $this->productDetails->update(
            [
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'image' => $this->photo,
                'category_id' => $this->category_id
            ]
        ); 

        return $this->redirect('/admin/products', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-product')->layout('admin-layout');
    }
}
