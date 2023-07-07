<?php

namespace App\Http\Livewire;

use App\Models\ProductCategory;
use Livewire\Component;

class Categories extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = ProductCategory::select('id', 'category')->get();
        return view('admin.manage-categories.livewire.categories', ['categories' => $this->categories]);
    }
}
