<?php

namespace App\Http\Livewire\Customer;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        $products = DB::table('cart')->join('products', 'products.id',"=",'cart.product_id')
                        ->join('product_categories', 'product_categories.id',"=",'products.category_id')
                        ->select('cart.*', 'products.product_name', 'products.product_price', 'products.product_img1', 'product_categories.category')
                        ->where('user_id', auth()->user()->id)->get();
        
        $price_subtotal = 0;

        foreach($products as $product) {
            $price_subtotal += ($product->product_price * $product->quantity);
        }
        
        return view('customer.manage-cart.livewire.cart', ['products' => $products, 'subtotal' => $price_subtotal]);
    }
}
