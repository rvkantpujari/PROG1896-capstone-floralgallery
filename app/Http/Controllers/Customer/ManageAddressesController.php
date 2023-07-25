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
        $provinces = DB::table('provinces')->select('provinces.id as province_id', 'provinces.province')->get();
        return view('customer.manage-addresses.address.add', ['provinces' => $provinces]);
    }

    function add(CustomerAddressRequest $request)
    {
        $request->validated();

        $address = new UserAddresses();
        $address->user_full_name = $request->user_full_name;
        $address->unit = $request->unit;
        $address->street_number = $request->street_number;
        $address->street_name = $request->street_name;
        $address->city = $request->city;
        $address->postal_code = $request->postal_code;
        $address->province_id = $request->province_id;
        $address->user_id = auth()->user()->id;
        $address->save();

        return Redirect::route('customer.addresses')->with('added-user-address', "New Delivery Address Added Successfully.");
    }

    function edit(Request $request)
    {
        $provinces = DB::table('provinces')->select('provinces.id as province_id', 'provinces.province')->get();

        $address = DB::table('user_addresses')->join('provinces', 'provinces.id',"=",'user_addresses.province_id')
                        ->select('user_addresses.*', 'provinces.id as province_id', 'provinces.province')
                        ->where([['user_addresses.id', $request->user_address_id], ['user_id', auth()->user()->id]])->first();

        return view('customer.manage-addresses.address.edit', ['provinces' => $provinces, 'address' => $address]);
    }

    function update(CustomerAddressRequest $request)
    {
        $request->validated();

        UserAddresses::where('id', $request->id)->update($request->except(['_token', '_method']));

        return Redirect::route('customer.addresses')->with('updated-user-address', "Delivery Address Updated Successfully.");
    }
    
    function destroy(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = DB::table('users')->select('default_address_id')->where('id', auth()->user()->id)->first();
            // check if given address is default address or not
            if($user->default_address_id == $request->user_address_id)
                DB::table('users')->where('id', auth()->user()->id)->update(['default_address_id' => null]);
            // delete given address
            UserAddresses::where([['id', $request->user_address_id], ['user_id', auth()->user()->id]])->delete();
            DB::commit();
        } 
        catch (\Exception $e) {
            DB::rollback();
        }

        return Redirect::route('customer.addresses')->with('deleted-user-address', "Delivery Address Deleted Successfully.");
    }

    function setAddress(Request $request)
    {
        DB::table('users')->where('id', auth()->user()->id)->update($request->except(['_token', '_method']));
        return Redirect::route('customer.addresses')->with('set-default-user-address', "Default Delivery Address Set Successfully.");
    }
}
