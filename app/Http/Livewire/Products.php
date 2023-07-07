<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public function render()
    {
        $this->products = Product::select('id', 'product_name')->get();
        return view('seller.manage-products.livewire.products');
    }
}
