<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductAddOrUpdateRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ManageProductsController extends Controller
{
    /**
     * Display the product list.
     */
    public function index(): View
    {
        return view('seller.manage_products');
    }

    /**
     * Display add new product form.
     */
    public function add(): View
    {
        $product_categories = ProductCategory::select('*')->get();
        return view('seller.manage-products.product.add', ['categories' => $product_categories]);
    }

    /**
     * Add new product to your store listing.
     */
    public function store(ProductAddOrUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        $product_categories = ProductCategory::select('*')->get();
        DB::table('products')->insert($request->except(['_token']));
        
        return Redirect::route('seller.products')->with('add-product-info', "New Product Added Successfully.");
        // return view('seller.manage-products.product.add', ['categories' => $product_categories]);
    }

    /**
     * Display the product editing form.
     */
    public function edit(Request $request): View
    {
        $product = Product::where('id', $request->route('id'))->first();
        return view('seller.manage-products.product.edit', ['product' => $product]);
    }

    /**
     * Update the product information.
    */
    public function update(Request $request): RedirectResponse
    {
        Product::where('id', $request->route('id'))->update(['product' => $request->product]);

        return Redirect::route('seller.products')->with('update-product-info', "Product Infromation Updated Successfully.");
    }

    /**
     * Delete the product information.
    */
    public function destroy(Request $request): RedirectResponse
    {
        Product::where('id', $request->route('id'))->delete();

        return Redirect::route('seller.products')->with('delete-product-info', "Product Information Deleted Successfully.");
    }
}
