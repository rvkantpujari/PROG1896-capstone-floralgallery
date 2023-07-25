<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ManageProvincesController extends Controller
{
    /**
     * Display the province list.
     */
    public function index(): View
    {
        return view('admin.manage_provinces');
    }

    public function add(): View
    {
        return view('admin.manage-provinces.province.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'province' => ['required', 'string', 'min:4'],
            'province_code' => ['required', 'string', 'min:2'],
        ]);

        $province = new Province();
        $province->province = $request->province;
        $province->province_alpha_code = $request->province_code;
        $province->save();

        return Redirect::route('admin.provinces')->with('add-province-info', "New Province Infromation Added Successfully.");
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
