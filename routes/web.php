<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('loggedIn');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');


Route::get('/contact_us', [ContactFormController::class, 'showContactForm'])->name('contact_us');
Route::post('/contact_us', [ContactFormController::class, 'contactFormValidation'])->name('contact_us');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/search', [SearchProductController::class, 'showSearchForm'])->name('search');
Route::post('/search', [SearchProductController::class, 'showResults'])->name('search');


Route::get('/view_product', function () {
    return view('view_product');
})->name('view_product');


Route::fallback(function () {
    return view('404');
});


require __DIR__.'/auth.php';
