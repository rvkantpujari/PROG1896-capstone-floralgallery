<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ManageCategoryController extends Controller
{
    /**
     * Display the category list.
     */
    public function index(): View
    {
        return view('admin.manage_categories');
    }

    public function add()
    {
        return view('admin.manage-categories.category.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'string', 'min:4']
        ]);

        $product_category = new ProductCategory();
        $product_category->category = $request->category;
        $product_category->save();
        
        return Redirect::route('admin.categories')->with('update-category-info', "Category Infromation Updated Successfully.");
    }

    /**
     * Display the category editing form.
     */
    public function edit(Request $request): View
    {
        $category = ProductCategory::where('id', $request->route('id'))->first();
        return view('admin.manage-categories.category.edit', ['category' => $category]);
    }

    /**
     * Update the category information.
    */
    public function update(Request $request): RedirectResponse
    {
        ProductCategory::where('id', $request->route('id'))->update(['category' => $request->category]);

        return Redirect::route('admin.categories')->with('update-category-info', "Category Infromation Updated Successfully.");
    }

    /**
     * Delete the category information.
    */
    public function destroy(Request $request): RedirectResponse
    {
        ProductCategory::where('id', $request->route('id'))->delete();

        return Redirect::route('admin.categories')->with('delete-category-info', "Category Information Deleted Successfully.");
    }
}
