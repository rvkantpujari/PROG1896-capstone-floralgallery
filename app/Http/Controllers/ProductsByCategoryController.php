<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsByCategoryController extends Controller
{
    function show(Request $request)
    {
        $category = '';
        
        if($request->route('category') !== null)
            $category = $request->route('category');

        $category = DB::table('product_categories')->select()->where('category', $category)->first();

        if($category === null)
            return redirect()->route('home');

        $categories = DB::table('product_categories')->select()->get();

        $products = DB::table('product_categories')->join('products', 'products.category_id',"=",'product_categories.id')
                        ->select('products.id as product_id', 'products.*', 'product_categories.id as category_id', 'product_categories.category as category')
                        ->where('products.product_status', '=', 'published')
                        ->where('products.category_id', $category->id)
                        ->paginate(6);
        
        return view('search', ['categories' => $categories, 'search_category' => $category->category ,'products' => $products]);
    }
}