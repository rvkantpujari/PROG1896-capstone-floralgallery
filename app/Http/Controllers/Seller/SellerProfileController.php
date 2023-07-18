<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\SellerProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SellerProfileController extends Controller
{
    /**
     * Display the seller's profile form.
     */
    public function edit(Request $request): View
    {
        return view('seller.profile.edit', [
            'seller' => $request->user(),
        ]);
    }

    /**
     * Update the seller's profile information.
    */
    public function update(SellerProfileUpdateRequest $request): RedirectResponse
    {
        $request->seller()->fill($request->validated());

        if ($request->seller()->isDirty('email')) {
            $request->seller()->email_verified_at = null;
        }

        $request->seller()->save();

        return Redirect::route('seller.profile.edit')->with('update-personal-info', "Personal Infromation Updated Successfully.");
    }

    /**
     * Delete the seller's account.
    */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $seller = $request->seller();

        Auth::guard('seller')->logout();

        $seller->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
