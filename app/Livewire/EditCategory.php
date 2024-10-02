<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;

class EditCategory extends Component
{
    public $categoryDetails;

    #[Validate('required')] 
    public $name;

    public function mount($id){
        $this->categoryDetails = Category::find($id);
        $this->name = $this->categoryDetails->name;
    }

    public function updateCategory(){
        $this->categoryDetails->update(
            [
                'name' => $this->name,
            ]
        ); 
        return $this->redirect('/admin/category', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-category')->layout('admin-layout');
    }
}
