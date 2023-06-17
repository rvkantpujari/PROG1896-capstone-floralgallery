<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class PersonalInfoFormController extends Controller
{
    // Personal Info Validation
    function personalInfoFormValidation(Request $req) {
        $validate = $req->validate([
            'file_upload' => 'image|mimes:jpg,png,jpeg|max:4096',
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'street_address' => 'required|max:100',
            'city' => 'required|max:100',
            'province' => 'required',
            'postal_code' => 'required'
        ]);
        echo "<script>console.log('Personal Info');</script>";
        return view('profile');
    }
}
