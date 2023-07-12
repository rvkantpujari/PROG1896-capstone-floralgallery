<?php

namespace App\Http\Livewire\Admin;

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
            ->join('sellers', 'sellers.id',"=",'products.seller_id')
            ->select('products.id as product_id', 'products.product_name', 'products.product_price', 'products.product_status', 'product_categories.id as category_id', 'product_categories.category', 'sellers.id as seller_id', 'sellers.first_name', 'sellers.last_name', 'sellers.store_name')
            ->get();
        
        return view('admin.manage-products.livewire.products');
    }
}
