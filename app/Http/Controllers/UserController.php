<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // echo "<script>swal('Hello world!')</script>";
        return view('accounts.signup');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        //
        $validate = $req->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|email', 
            'password' => [
                'required', 
                Password::min(8)->mixedCase()->numbers()
            ]
            // 'confirm_password' => 'required|confirmed|min:8'
        ]);

        
        $user = new User();
        $user->fname = $req->first_name;
        $user->lname = $req->last_name;
        $user->email = $req->email;
        $user->save();

        return redirect(route('signup'))->with('message','Registration Successfull!!');;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
