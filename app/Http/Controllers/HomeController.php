<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() : View
    {
        $categories = DB::table('product_categories')->select()->get();
        $products = DB::table('product_categories')
                        ->join('products', 'products.category_id',"=",'product_categories.id')
                        ->select('products.id as product_id', 'products.*', 'product_categories.id as category_id', 'product_categories.category as category')
                        ->where('products.product_status', '=', 'published')
                        ->get();
        return view('home', ['categories' => $categories, 'products' => $products, 'checked_catgs' => null]);
    }
    
    function applyFilter(Request $request) : View
    {
        // dd($request);
        $request->validate([
            'price_min' => 'numeric|nullable',
            'price_max' => 'numeric|nullable',
        ]);
        $categories = DB::table('product_categories')->select()->get();

        $products = DB::table('product_categories')->join('products', 'products.category_id',"=",'product_categories.id')
                        ->select('products.id as product_id', 'products.*', 'product_categories.id as category_id', 'product_categories.category as category')
                        ->where('products.product_status', '=', 'published')
                        ->when($request->product_category != null, function($q) use ($request) {
                            return $q->whereIn('product_categories.category', $request->product_category);
                        })
                        ->when($request->price_min, function($q) use ($request) {
                            $price_max = $request->price_max == null ? DB::table('products')->max('product_price') : $request->price_max;
                            $q->whereRaw("products.product_price BETWEEN $request->price_min AND $price_max");//, [$request->price_min == null ? 0 : $request->price_min, $request->product_max]);
                        })
                        ->when($request->price_max, function($q) use ($request) {
                            $price_min = $request->price_min == null ? 0 : $request->price_min;
                            $q->whereRaw("products.product_price BETWEEN $price_min AND $request->price_max");//, [$request->price_min == null ? 0 : $request->price_min, $request->product_max]);
                        })
                        ->get();
        
        return view('home', ['categories' => $categories, 'products' => $products]);//, 'checked_catgs' => $request->product_category]);
    }
}
