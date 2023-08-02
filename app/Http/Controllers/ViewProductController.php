<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ViewProductController extends Controller
{
    function index(Request $request)
    {
        $product = DB::table('products')
                        ->join('product_categories', 'product_categories.id',"=",'products.category_id')
                        ->join('sellers', 'sellers.id',"=",'products.seller_id')
                        ->select('products.id as product_id', 'products.*', 'product_categories.id as category_id', 'product_categories.category as category', 'sellers.id as seller_id', 'sellers.store_name')
                        ->where([
                            ['products.product_status', '=', 'published'],
                            ['products.id', '=', $request->route('product_id')],
                        ])->first();
        
        if($product == null)
            return Redirect::to('/');
        
        return view('view_product', ['product' => $product]);
    }
}