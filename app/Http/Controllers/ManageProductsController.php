<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductAddOrUpdateRequest;
use App\Models\Product;
use App\Models\ProductCategory;
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

        $dirPath = '/sellers/seller_'.auth()->user()->id;

        if($request->hasFile('product_images')) {
            foreach($request->product_images as $key => $value) {
                $string = sha1(rand());
                $randomString = substr($string, 0, 6);
                $imgName = 'FloralGallery-seller_'.auth()->user()->id.'-'.date('Y-m-d-H-i-s-u').'-'.$randomString.'.'.$value->extension();
                $value->move(public_path().$dirPath, $imgName);
                $imgs[] = $imgName;
            }
        }

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;
        $product->seller_id = $request->seller_id;
        $product->product_img1 = $imgs[0];

        if(count($request->product_images) > 1)
            $product->product_img2 = $imgs[1];
        
        if(count($request->product_images) > 2)
            $product->product_img3 = $imgs[2];

        if(count($request->product_images) > 3)
            $product->product_img4 = $imgName[3];

        $product->save();
        
        return Redirect::route('seller.products')->with('add-product-info', "New Product Added Successfully.");
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
