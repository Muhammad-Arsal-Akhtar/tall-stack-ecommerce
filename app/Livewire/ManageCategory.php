<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class ManageCategory extends Component
{
    use WithPagination;

    public $perPage = 2; 

    public $sortColumn = 'created_at';

    public $sortBy = 'DESC';

    public $currentURL;

    public $search;

    public function render()
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $this->currentURL = $segments[0].' '.$segments[1];

        return view('livewire.manage-category',
            ['categories' => Category::search($this->search)
            ->orderBy($this->sortColumn, $this->sortBy)
            ->paginate($this->perPage)
            ]
        )->layout('admin-layout');
    }



    public function sortSetting($sortColumn){

        if($this->sortColumn == $sortColumn){
            $this->sortBy = ($this->sortBy == 'DESC') ? 'ASC' : 'DESC';
            return;
        }

        $this->sortColumn = $sortColumn;
        $this->sortBy = 'ASC';
    }

    public function deleteItem($id){
        // $deletedProduct = Product::findOrFail($id)->delete();

        $this->dispatch('close-modal-deleted');
    }

}
