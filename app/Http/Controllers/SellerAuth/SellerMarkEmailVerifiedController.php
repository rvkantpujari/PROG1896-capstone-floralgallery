<?php

namespace App\Http\Controllers\SellerAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class SellerMarkEmailVerifiedController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::SELLER_HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            $request->user()->status = "verified";
            event(new Verified($request->user()));
            $request->user()->update();
        }

        return redirect()->intended(RouteServiceProvider::SELLER_HOME.'?verified=1');
    }
}
