<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SearchProductController;
use App\Http\Controllers\SignInFormController;
use App\Http\Controllers\SignUpFormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/contact_us', [ContactFormController::class, 'showContactForm'])->name('contact_us');
Route::post('/contact_us', [ContactFormController::class, 'contactFormValidation'])->name('contact_us');

// Route::get('/signin', function () {
//     return view('accounts.signin');
// })->name('signin');

Route::get('/signin', [SignInFormController::class, 'showSignInForm'])->name('signin');
Route::post('/signin', [SignInFormController::class, 'signInFormValidation'])->name('signin');

// Route::get('/signup', function () {
//     return view('accounts.signup');
// })->name('signup');

Route::get('/signup', [SignUpFormController::class, 'showSignUpForm'])->name('signup');
Route::post('/signup', [SignUpFormController::class, 'signUpFormValidation'])->name('signup');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Route::get('/search', function () {
//     return view('search');
// })->name('search');

Route::get('/search', [SearchProductController::class, 'showSearchForm'])->name('search');
Route::post('/search', [SearchProductController::class, 'showResults'])->name('search');

Route::get('/view_product', function () {
    return view('view_product');
})->name('view_product');

Route::fallback(function () {
    return view('404');
});
