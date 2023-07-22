<?php

namespace App\Http\Livewire\Customer;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        $product_count = DB::table('cart')->where('user_id', auth()->user()->id)->count();
        return view('livewire.cart', ['product_count' => $product_count]);
    }
}
