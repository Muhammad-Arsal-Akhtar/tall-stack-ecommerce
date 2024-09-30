<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductTable extends Component
{
    use WithPagination;

    public $perPage = 2; 

    public $sortColumn = 'created_at';

    public $sortBy = 'DESC';

    public $currentURL;

    public $search;

    public function sortSetting($sortColumn){

        if($this->sortColumn == $sortColumn){
            $this->sortBy = ($this->sortBy == 'DESC') ? 'ASC' : 'DESC';
            return;
        }

        $this->sortColumn = $sortColumn;
        $this->sortBy = 'ASC';
    }

    public function deleteProduct($id){
        // $deletedProduct = Product::findOrFail($id)->delete();

        $this->dispatch('close-product-deleted');
    }

    public function render()
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $this->currentURL = $segments[0].' '.$segments[1];

        return view('livewire.product-table', 
        ['products' => Product::with('category')->search($this->search)
        ->orderBy($this->sortColumn, $this->sortBy)
        ->paginate($this->perPage)
        ]);
    }
}
