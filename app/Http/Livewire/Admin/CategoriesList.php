<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductCategory;
use Livewire\Component;

class CategoriesList extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = ProductCategory::select('id', 'category')->get();
        return view('admin.manage-categories.livewire.categories', ['categories' => $this->categories]);
    }
}
