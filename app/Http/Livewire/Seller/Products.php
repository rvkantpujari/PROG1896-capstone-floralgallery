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
            ->join('sellers', 'products.seller_id',"=",'sellers.id')
            ->select('products.id as id', 'products.product_name', 'products.product_price', 'products.product_status', 'product_categories.id as category_id', 'product_categories.category', 'sellers.id as seller_id')
            ->where([
                ['products.product_status', '!=', 'deleted'],
                ['products.seller_id', '=', auth()->user()->id]
            ])
            ->get();
        return view('seller.manage-products.livewire.products');
    }
}
