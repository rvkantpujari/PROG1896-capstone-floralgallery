<?php

namespace App\Http\Livewire\Seller;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProductsPieChart extends Component
{
    public function render()
    {
        $seller_products = DB::table('sellers')->join('products', 'products.seller_id', '=', 'sellers.id')
                            ->join('product_categories', 'product_categories.id', '=', 'products.category_id')
                            ->select(DB::raw('count(*) as count'), 'product_categories.category as category')
                            ->where('sellers.id', auth()->user()->id)->groupBy('product_categories.category')->get();
        
        $seller_products_count = [];
        foreach($seller_products as $data) {
            array_push($seller_products_count, $data->count);
        }

        $seller_products_category = [];
        foreach($seller_products as $data) {
            array_push($seller_products_category, $data->category);
        }
        
        $countData = count($seller_products_category);
        return view('seller.dashboard.livewire.products-pie-chart', compact('seller_products_count', 'seller_products_category', 'countData'));
    }
}
