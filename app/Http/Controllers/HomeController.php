<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
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
        return view('home', ['categories' => $categories, 'products' => $products]);
    }
}
