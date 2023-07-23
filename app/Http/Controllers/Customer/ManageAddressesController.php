<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ManageAddressesController extends Controller
{
    function index()
    {
        return view('customer.manage_addresses');
    }

    function add(Request $request)
    {
        
    }

    function update(Request $request)
    {
        
    }
    
    function destroy(Request $request)
    {
        
    }
}
