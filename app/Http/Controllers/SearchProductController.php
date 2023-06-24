<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    //
    function showSearchForm() {
        return view('search');
    }

    // show search results
    function showResults(Request $req) {
        // dd($req);
        // print_r($req->all());
        // print_r($req->input('search'));
        $req->validate([
            'search' => 'required|min:3'
        ]);
        return view('search', ['search' => $req->input('search')]);
    }
}
