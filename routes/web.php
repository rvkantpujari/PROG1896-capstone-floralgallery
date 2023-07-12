<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SearchProductController;

use App\Http\Controllers\ProfileController as CustomerProfileController;

use App\Http\Controllers\Admin\ManageProvinceController as AdminManageProvinceController;
use App\Http\Controllers\Admin\AdminProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ManageCategoryController as AdminManageCategoryController;
use App\Http\Controllers\Admin\ManageCustomersController as AdminManageCustomersController;
use App\Http\Controllers\Admin\ManageProductsController as AdminManageProductsController;

use App\Http\Controllers\Seller\SellerProfileController as SellerProfileController;
use App\Http\Controllers\Seller\ManageProductsController as SellerManageProductsController;

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
})->middleware(['auth'])->name('loggedIn');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [CustomerProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [CustomerProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [CustomerProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/cart', function () {
    return view('cart');
})->name('cart');


require __DIR__.'/auth.php';


// Admin Routes

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');


Route::get('/admin/manage-sellers', function() {
    return view('admin.manage_sellers');
})->middleware(['auth:admin'])->name('admin.manage_sellers');


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/manage-provinces', [AdminManageProvinceController::class, 'index'])->name('admin.provinces');
    Route::get('/admin/edit-province/{id}', [AdminManageProvinceController::class, 'edit'])->name('admin.province.edit');
    Route::patch('/admin/edit-province/{id}', [AdminManageProvinceController::class, 'update'])->name('admin.province.update');
    Route::get('/admin/delete-province/{id}', [AdminManageProvinceController::class, 'destroy'])->name('admin.province.destroy');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/manage-customers', [AdminManageCustomersController::class, 'index'])->name('admin.customers');
    Route::get('/admin/edit-customer/{id}', [AdminManageCustomersController::class, 'edit'])->name('admin.customer.edit');
    Route::patch('/admin/edit-customer/{id}', [AdminManageCustomersController::class, 'update'])->name('admin.customer.update');
    Route::get('/admin/delete-customer/{id}', [AdminManageCustomersController::class, 'destroy'])->name('admin.customer.destroy');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/manage-categories', [AdminManageCategoryController::class, 'index'])->name('admin.categories');
    Route::get('/admin/edit-category/{id}', [AdminManageCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::patch('/admin/edit-category/{id}', [AdminManageCategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/admin/delete-category/{id}', [AdminManageCategoryController::class, 'destroy'])->name('admin.category.destroy');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/manage-products', [AdminManageProductsController::class, 'index'])->name('admin.products');
    Route::get('/admin/edit-product/{id}', [AdminManageProductsController::class, 'edit'])->name('admin.product.edit');
    Route::patch('/admin/edit-product/{id}', [AdminManageProductsController::class, 'update'])->name('admin.product.update');
    Route::patch('/admin/delete-product/{id}', [AdminManageProductsController::class, 'destroy'])->name('admin.product.destroy');
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


Route::middleware('auth:seller')->group(function () {
    Route::get('/seller/manage-products', [SellerManageProductsController::class, 'index'])->name('seller.products');
    Route::get('/seller/add-product', [SellerManageProductsController::class, 'add'])->name('seller.product.add');
    Route::post('/seller/add-product', [SellerManageProductsController::class, 'store'])->name('seller.product.store');
    Route::get('/seller/edit-product/{id}', [SellerManageProductsController::class, 'edit'])->name('seller.product.edit');
    Route::patch('/seller/edit-product/{id}', [SellerManageProductsController::class, 'update'])->name('seller.product.update');
    Route::get('/seller/delete-product/{id}', [SellerManageProductsController::class, 'destroy'])->name('seller.product.destroy');
});


require __DIR__.'/sellerauth.php';


Route::fallback(function () {
    return view('404');
});