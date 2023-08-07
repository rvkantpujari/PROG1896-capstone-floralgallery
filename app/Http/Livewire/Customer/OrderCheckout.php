<?php

namespace App\Http\Livewire\Customer;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderCheckout extends Component
{
    public function render()
    {
        $products = DB::table('cart')->join('products', 'products.id',"=",'cart.product_id')
                        ->join('product_categories', 'product_categories.id',"=",'products.category_id')
                        ->select('cart.*', 'products.product_name', 'products.product_price', 'product_categories.category')
                        ->where('user_id', auth()->user()->id)->get();
        
        $price_subtotal = 0;

        foreach($products as $product) {
            $price_subtotal += ($product->product_price * $product->quantity);
        }

        $total_price = $price_subtotal;

        $default_address = DB::table('users')->join('user_addresses', 'user_addresses.id',"=",'users.default_address_id')
                                ->select('users.default_address_id', 'user_addresses.province_id')->where('users.id', auth()->user()->id)->first();

        $taxes = array(); $total_tax = 0;
        if($default_address !== null) {
            $tax_info = DB::table('provinces')->where('id', $default_address->province_id)->first();
            if($tax_info->gst != null)
                $taxes['gst'] = $tax_info->gst;
            if($tax_info->pst != null)
                $taxes['pst'] = $tax_info->pst;
            if($tax_info->hst != null)
                $taxes['hst'] = $tax_info->hst;
            
            $total_tax = round((($tax_info->gst * 0.01 + $tax_info->pst * 0.01 + $tax_info->hst * 0.01) * $price_subtotal), 3);

            $total_price += $total_tax;
        }
        
        return view('customer.manage-order.livewire.order-checkout', ['products' => $products, 'subtotal' => $price_subtotal, 'total' => $total_price, 'default_address' => $default_address, 'taxes' => $taxes, 'total_tax' => $total_tax]);
    }
}
