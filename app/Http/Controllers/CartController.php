<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    function index() : View
    {
        return view('cart');
    }

    function add(Request $request)
    {
        DB::beginTransaction();
        try {
            $product = DB::table('products')->select('id', 'product_price')
                            ->where('id', $request->product_id)->first();
            
            $productExists = Cart::where('product_id', $request->product_id)->first();
            
            if($productExists) {
                $quantity = $productExists->quantity + $request->product_quantity;
                DB::table('cart')->where([['product_id', $request->product_id], ['user_id', auth()->user()->id]])->update(['quantity' => $quantity]);
                return Redirect::back()->with('cart-product-updated','Product quantity updated in your cart.');
            } else {
                $cart = new Cart();
                $cart->product_id = $product->id;
                $cart->user_id = auth()->user()->id;
                $cart->quantity = (int) $request->product_quantity;
                $cart->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        return Redirect::back()->with('cart-product-added','Product added to your cart successfully.');
    }
}
