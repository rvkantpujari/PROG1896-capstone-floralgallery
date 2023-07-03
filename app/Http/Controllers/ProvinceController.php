<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProvinceController extends Controller
{
    /**
     * Display the province list.
     */
    public function index(): View
    {
        return view('admin.manage_provinces');
    }

    /**
     * Display the province editing form.
     */
    public function edit(Request $request): View
    {
        $province = Province::where('id', $request->route('id'))->first();
        return view('admin.manage-provinces.province.edit', ['province' => $province]);
    }

    /**
     * Update the province information.
    */
    public function update(Request $request): RedirectResponse
    {
        Province::where('id', $request->route('id'))->update(['province' => $request->province]);

        return Redirect::route('admin.provinces')->with('update-province-info', "Province Infromation Updated Successfully.");
    }

    /**
     * Delete the province information.
    */
    public function destroy(Request $request): RedirectResponse
    {
        Province::where('id', $request->route('id'))->delete();

        return Redirect::route('admin.provinces')->with('delete-province-info', "Province Information Deleted Successfully.");
    }
}
