<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    function index()
    {
        $product_count = Cart::where('user_id', auth()->user()->id)->count();
        
        if($product_count == 0)
            return Redirect::back();

        return view('cart');
    }

    function add(Request $request)
    {
        $txType = 0; // 0 - Added OR 1 - Updated
        DB::beginTransaction();
        try {
            $product = DB::table('products')->select('id', 'product_price')
                            ->where('id', $request->product_id)->first();
            
            $productExists = Cart::where('product_id', $request->product_id)->first();
            
            if($productExists) {
                $quantity = $productExists->quantity + $request->product_quantity;
                DB::table('cart')->where([['product_id', $request->product_id], ['user_id', auth()->user()->id]])->update(['quantity' => $quantity]);
                $txType = 1;
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

        if($txType)
            return Redirect::back()->with('cart-product-updated','Product quantity updated in your cart.');

        return Redirect::back()->with('cart-product-added','Product added to your cart successfully.');
    }
    
    function remove(Request $request)
    {
        DB::table('cart')->where([['product_id', $request->product_id], ['user_id', auth()->user()->id]])->delete();

        $product_count = Cart::where('user_id', auth()->user()->id)->count();
        
        if($product_count == 0)
            return Redirect::route('home');

        return Redirect::back()->with('cart-product-removed','Product removed from your cart.');
    }

    function update(Request $request)
    {
        DB::table('cart')->where([['product_id', $request->product_id], ['user_id', auth()->user()->id]])
                        ->update(['quantity' => $request->product_quantity]);

        return Redirect::back()->with('cart-product-qty-updated','Product quantity updated in your cart.');
    }
}
