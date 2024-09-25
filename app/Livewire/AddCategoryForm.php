<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Category;

class AddCategoryForm extends Component
{
    public $currentURL;

    #[Validate('required')] 
    public $name;

    public function render()
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $this->currentURL = $segments[0].' '.$segments[1];
        return view('livewire.add-category-form')->layout('admin-layout');
    }

    public function saveNewCategory(){
        
        $this->validate();

        $category = new Category;
        $category->name = $this->name;
        $category->save();

        return $this->redirect('/admin/category', navigate: true);
    }
}
