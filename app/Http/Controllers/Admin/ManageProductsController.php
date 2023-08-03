<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Http\Requests\ProductUpdateRequest;
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
        return view('admin.manage_products');
    }

    /**
     * Display add new product form.
     */
    public function add(): View
    {
        $product_categories = ProductCategory::select('*')->get();
        return view('admin.manage-products.product.add', ['categories' => $product_categories]);
    }

    /**
     * Add new product to your store listing.
     */
    public function store(ProductAddRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $dirPath = 'sellers/seller_'.auth()->user()->id;

        if($request->hasFile('product_images')) {
            foreach($request->product_images as $key => $value) {
                $string = sha1(rand());
                $randomString = substr($string, 0, 6);
                $imgName = 'FloralGallery-seller_'.auth()->user()->id.'-'.date('Y-m-d-H-i-s-u').'-'.$randomString.'.'.$value->extension();
                $value->move(public_path().'/'.$dirPath, $imgName);
                $imgs[] = $dirPath.'/'.$imgName;
            }
        }

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;
        $product->admin_id = $request->admin_id;
        $product->product_img1 = $imgs[0];

        if(count($request->product_images) > 1)
            $product->product_img2 = $imgs[1];
        
        if(count($request->product_images) > 2)
            $product->product_img3 = $imgs[2];

        if(count($request->product_images) > 3)
            $product->product_img4 = $imgs[3];

        $product->save();
        
        return Redirect::route('admin.products')->with('add-product-info', "New Product Added Successfully.");
    }

    /**
     * Display the product editing form.
     */
    public function edit(Request $request): View
    {
        $product = DB::table('products')
                    ->join('product_categories', 'products.category_id',"=",'product_categories.id')
                    ->join('sellers', 'sellers.id',"=",'products.seller_id')
                    ->select('products.id', 'products.product_name', 'products.product_price', 'products.product_dimensions', 'products.product_desc', 'products.product_status', 
                        'product_img1', 'product_img2', 'product_img3', 'product_img4', 'product_categories.category', 'sellers.id as seller_id', 'sellers.first_name', 
                        'sellers.last_name', 'sellers.store_name', 'product_categories.id as category_id')
                    ->where('products.id', $request->route('id'))->first();
        
        $categories = ProductCategory::select()->get();
        
        return view('admin.manage-products.product.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the product information.
    */
    public function update(ProductUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if(isset($request->product_images)) {
            // Get paths of existing images.
            $allExistingImgPaths = DB::table('products')->select('product_img1','product_img2', 'product_img3', 'product_img4')
                                        ->where('id', $request->route('id'))->first();
            
            // Delete existing images one by one.
            foreach ($allExistingImgPaths as $key => $imgPath) {
                if(file_exists($imgPath)){
                    unlink($imgPath);
                }
            }
            
            // Set path where updated images will be saved to.
            $dirPath = 'sellers/seller_'.$request->seller_id;

            // Rename and Move images one by one.
            foreach($request->product_images as $key => $value) {
                $randomString = substr(sha1(rand().microtime()), 0, 6);
                $imgName = 'FloralGallery-seller_'.auth()->user()->id.'-'.date('Y-m-d-H-i-s').'-'.$randomString.'.'.$value->extension();
                $value->move(public_path().'/'.$dirPath, $imgName);
                $imgs[] = $dirPath.'/'.$imgName;
            }


            if(count($request->product_images) == 1) {
                $request['product_img1'] = $imgs[0];
                $request['product_img2'] = NULL;
                $request['product_img3'] = NULL;
                $request['product_img4'] = NULL;
            }

            if(count($request->product_images) == 2) {
                $request['product_img1'] = $imgs[0];
                $request['product_img2'] = $imgs[1];
                $request['product_img3'] = NULL;
                $request['product_img4'] = NULL;
            }
            
            if(count($request->product_images) == 3) {
                $request['product_img1'] = $imgs[0];
                $request['product_img2'] = $imgs[1];
                $request['product_img3'] = $imgs[2];
                $request['product_img4'] = NULL;
            }
            
            if(count($request->product_images) == 4) {
                $request['product_img1'] = $imgs[0];
                $request['product_img2'] = $imgs[1];
                $request['product_img3'] = $imgs[2];
                $request['product_img4'] = $imgs[3];
            }

            Product::where('id', $request->route('id'))->update($request->except(['_token', '_method', 'product_images', 'store_name', 'product_seller']));
        }
        else {
            Product::where('id', $request->route('id'))->update($request->except(['_token', '_method', 'store_name', 'product_seller']));
        }
        
        return Redirect::route('admin.products')->with('update-product-info', "Product Infromation Updated Successfully.");
    }

    /**
     * Delete the product information.
    */
    public function destroy(Request $request): RedirectResponse
    {
        Product::where('id', $request->route('id'))->update(['product_status' => 'deleted']);
        return Redirect::route('admin.products')->with('delete-product-info', "Product Information Deleted Successfully.");
    }

    public function seller_products(Request $request)
    {
        $store = DB::table('sellers')->select('sellers.store_name')->where('sellers.id', $request->route('seller_id'))->first();
        
        return view('admin.manage_store', ['store' => $store, 'var' => 12]);
    }
}
