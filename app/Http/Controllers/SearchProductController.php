<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProductController extends Controller
{
    function showSearchForm(Request $request) 
    {
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
                        ->paginate(6);
        
        return view('search', ['categories' => $categories, 'products' => $products, 'search' => $request->input('search')]);
    }

    // show search results
    function showResults(Request $request) 
    {
        $request->validate([
            'search' => 'required|min:3'
        ]);
        
        $categories = DB::table('product_categories')->select()->get();
        
        $products = DB::table('product_categories')->join('products', 'products.category_id',"=",'product_categories.id')
        ->select('products.id as product_id', 'products.product_name', 'products.product_price', 'products.product_img1', 'products.product_status', 'product_categories.id as category_id', 'product_categories.category as category')
                        ->where('products.product_status', '=', 'published')
                        ->when($request->product_category != null, function($q) use ($request) {
                            return $q->whereIn('product_categories.category', $request->product_category);
                        })
                        ->when($request->search != null, function($q) use ($request) {
                            $q->where('products.product_name', "like", "%" . $request->search . "%");
                            $q->orWhere('products.product_desc', "like", "%" . $request->search . "%");
                        })
                        ->paginate(6);
        
        return view('search', ['categories' => $categories, 'products' => $products, 'search' => $request->input('search')]);
    }

    function applyFilter(Request $request) 
    {
        $request->validate([
            'price_min' => 'numeric|nullable',
            'price_max' => 'numeric|nullable',
        ]);

        $search = $request->has('search') ? $request->search : null;
        $search = $request->has('searchKeywords') ? $request->searchKeywords : null;
        $product_category = $request->has('product_category') ? $request->product_category : null;

        $categories = DB::table('product_categories')->select()->get();

        $products = DB::table('product_categories')->join('products', 'products.category_id',"=",'product_categories.id')
                        ->select('products.id as product_id', 'products.product_name', 'products.product_price', 'products.product_img1', 'products.product_status', 'product_categories.id as category_id', 'product_categories.category as category')
                        ->where('products.product_status', '=', 'published')
                        ->when($search !== null, function($q) use ($search) {
                            return $q->where('products.product_name', "like", "%" . $search . "%")
                              ->orWhere('products.product_desc', "like", "%" . $search . "%");
                        })
                        ->when($product_category != null, function($q) use ($product_category) {
                            return $q->whereIn('product_categories.category', $product_category);
                        })
                        ->when($request->price_min, function($q) use ($request) {
                            $price_max = $request->price_max == null ? DB::table('products')->max('product_price') : $request->price_max;
                            return $q->whereRaw("products.product_price BETWEEN $request->price_min AND $price_max");
                        })
                        ->when($request->price_max, function($q) use ($request) {
                            $price_min = $request->price_min == null ? 0 : $request->price_min;
                            return $q->whereRaw("products.product_price BETWEEN $price_min AND $request->price_max");
                        })
                        ->paginate(6);
        
        $search = $request->search == null ? $request->searchKeywords : $request->search;
        
        return view('search', ['categories' => $categories, 'products' => $products, 'search' => $search]);
    }
}
