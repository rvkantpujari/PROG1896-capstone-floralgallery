<?php

namespace App\Http\Livewire\Seller;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Products extends Component
{
    use WithFileUploads;
    
    public $products;
    public function render()
    {
        $this->products = DB::table('product_categories')
            ->join('products', 'products.category_id',"=",'product_categories.id')
            ->select("*")
            ->where('products.product_status', '!=', 'deleted')
            ->get();
        return view('seller.manage-products.livewire.products');
    }
}
