<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerAddressRequest;
use App\Models\UserAddresses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ManageAddressesController extends Controller
{
    function index()
    {
        return view('customer.manage_addresses');
    }

    function show()
    {
        $provinces = DB::table('provinces')->get();
        return view('customer.manage-addresses.address.add', ['provinces' => $provinces]);
    }

    function add(CustomerAddressRequest $request)
    {
        $request->validated();

        $address = new UserAddresses();
        $address->user_full_name = $request->full_name;
        $address->unit = $request->unit;
        $address->street_number = $request->street_number;
        $address->street_name = $request->street_name;
        $address->city = $request->city;
        $address->postal_code = $request->postal_code;
        $address->province_id = $request->province;
        $address->user_id = auth()->user()->id;
        $address->save();

        return Redirect::route('customer.addresses')->with('added-user-address', "New Delivery Address Added Successfully.");
    }

    function update(Request $request)
    {
        
    }
    
    function destroy(Request $request)
    {
        
    }
}
