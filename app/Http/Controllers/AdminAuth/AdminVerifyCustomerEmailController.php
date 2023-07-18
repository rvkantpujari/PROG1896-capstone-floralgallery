<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminVerifyCustomerEmailController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        $customer = User::where('id', $request->customer_id)->first();
        // if ($request->user()->hasVerifiedEmail()) {
        if ($customer->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }

        $customer->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
