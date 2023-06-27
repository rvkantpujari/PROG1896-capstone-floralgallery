<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\SellerProfileController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchProductController;
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


// Visitor Routes

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');


Route::get('/contact_us', [ContactFormController::class, 'showContactForm'])->name('contact_us');
Route::post('/contact_us', [ContactFormController::class, 'contactFormValidation'])->name('contact_us');


Route::get('/search', [SearchProductController::class, 'showSearchForm'])->name('search');
Route::post('/search', [SearchProductController::class, 'showResults'])->name('search');


Route::get('/view_product', function () {
    return view('view_product');
})->name('view_product');


// Customer Routes

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('loggedIn');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/cart', function () {
    return view('cart');
})->name('cart');


require __DIR__.'/auth.php';


// Admin Routes

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});


require __DIR__.'/adminauth.php';


// Seller Routes

Route::get('/seller/dashboard', function () {
    return view('seller.dashboard');
})->middleware(['auth:seller'])->name('seller.dashboard');


Route::middleware('auth:seller')->group(function () {
    Route::get('/seller/profile', [SellerProfileController::class, 'edit'])->name('seller.profile.edit');
    Route::patch('/seller/profile', [SellerProfileController::class, 'update'])->name('seller.profile.update');
    Route::delete('/seller/profile', [SellerProfileController::class, 'destroy'])->name('seller.profile.destroy');
});


require __DIR__.'/sellerauth.php';


Route::fallback(function () {
    return view('404');
});