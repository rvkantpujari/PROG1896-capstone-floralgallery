<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Products extends Component
{
    use WithFileUploads;
    
    public $products;
    public function render()
    {
        $this->products = Product::select('id', 'product_name')->get();
        return view('seller.manage-products.livewire.products');
    }
}
