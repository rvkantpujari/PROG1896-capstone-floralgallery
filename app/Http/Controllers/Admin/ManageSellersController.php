<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ManageSellersController extends Controller
{
    /**
     * Display the sellers' list.
     */
    public function index(): View
    {
        return view('admin.manage_sellers');
    }

    /**
     * Display the seller's editing form.
     */
    public function edit(Request $request): View
    {
        // dd($request);
        $seller = Seller::where('id', $request->route('id'))->first();
        return view('admin.manage-sellers.seller.edit', ['seller' => $seller]);
    }

    /**
     * Update the province information.
    */
    public function update(Request $request): RedirectResponse
    {
        Seller::where('id', $request->route('id'))->update($request->except(['_token', '_method']));
        return Redirect::route('admin.sellers')->with('update-seller-info', "Seller Infromation Updated Successfully.");
    }

    /**
     * Delete the province information.
    */
    public function destroy(Request $request): RedirectResponse
    {
        Seller::where('id', $request->route('id'))->update(['status' => 'deleted']);
        return Redirect::route('admin.sellers')->with('delete-seller-info', "Seller Information Deleted Successfully.");
    }
}
