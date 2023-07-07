<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
     * Add new product to your store listing.
     */
    public function add(): View
    {
        return view('seller.manage-products.product.add');
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
