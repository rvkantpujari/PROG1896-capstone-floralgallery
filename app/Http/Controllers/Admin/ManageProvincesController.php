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
            'pst' => ['numeric', 'nullable'],
            'gst' => ['numeric', 'nullable'],
            'hst' => ['numeric', 'nullable'],
        ]);

        $province = new Province();
        $province->province = $request->province;
        $province->province_alpha_code = $request->province_code;

        if($request->is_hst_applicable == 1) {
            $province->hst = $request->hst;
            $province->pst = null;
            $province->gst = null;
        }
        else {
            $province->hst = null;
            $province->pst = $request->pst;
            $province->gst = $request->gst;
        }

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
        if($request->is_hst_applicable == 1) {
            $request['hst'] = $request->hst;
            $request['pst'] = null;
            $request['gst'] = null;
        }
        else {
            $request['hst'] = null;
            $request['pst'] = $request->pst;
            $request['gst'] = $request->gst;
        }

        Province::where('id', $request->route('id'))->update($request->except(['_token', '_method', 'is_hst_applicable']));

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
