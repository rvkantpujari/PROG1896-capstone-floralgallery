<?php

namespace App\Http\Livewire\Customer;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CartProductsCount extends Component
{
    public function render()
    {
        $product_count = DB::table('cart')->where('user_id', auth()->user()->id)->count();
        return view('customer.manage-cart.livewire.cart-products-count', ['product_count' => $product_count]);
    }
}
