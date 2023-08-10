<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsByStoreController extends Controller
{
    function show(Request $request)
    {
        $store = '';
        
        if($request->route('store') !== null)
            $store = $request->route('store');
        
        $seller = DB::table('sellers')->where('store_name', $store)->first();

        if($seller === null)
            return redirect()->route('home');

        $categories = DB::table('product_categories')->get();

        $products = DB::table('product_categories')->join('products', 'products.category_id',"=",'product_categories.id')
                        ->select('products.id as product_id', 'products.*', 'product_categories.category')
                        ->where('products.product_status', '=', 'published')
                        ->where('products.seller_id', $seller->id)
                        ->paginate(6);
        
        return view('search', ['categories' => $categories, 'store_name' => $store ,'products' => $products]);
    }
}