<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    // show search form
    function showSearchForm() {
        return view('search');
    }

    // show search results
    function showResults(Request $req) {
        // dd($req);
        // print_r($req->all());
        // print_r($req->input('search'));
        return view('search');
    }
}
