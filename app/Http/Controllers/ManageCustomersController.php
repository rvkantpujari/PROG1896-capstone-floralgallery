<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ManageCustomersController extends Controller
{
    /**
     * Display the customers' list.
     */
    public function index(): View
    {
        return view('admin.manage_customers');
    }

    /**
     * Display the customer's editing form.
     */
    public function edit(Request $request): View
    {
        $customer = User::where('id', $request->route('id'))->first();
        // dd($customer);
        return view('admin.manage-customers.customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the province information.
    */
    public function update(Request $request): RedirectResponse
    {
        User::where('id', $request->route('id'))->update($request->except(['_token', '_method']));
        return Redirect::route('admin.customers')->with('update-customer-info', "Customer Infromation Updated Successfully.");
    }

    /**
     * Delete the province information.
    */
    public function destroy(Request $request): RedirectResponse
    {
        // dd($request);
        // User::where('id', $request->route('id'))->delete();
        User::where('id', $request->route('id'))->update(['status' => 'deleted']);

        return Redirect::route('admin.customers')->with('delete-customer', "Customer Information Deleted Successfully.");
    }
}
