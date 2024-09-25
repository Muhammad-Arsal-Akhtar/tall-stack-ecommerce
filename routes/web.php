<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductDetails;
use App\Livewire\AdminDashboard;
use App\Livewire\ManageProduct;
use App\Livewire\ManageOrder;
use App\Livewire\ManageCategory;
use App\Livewire\AddProductForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product-details', ProductDetails::class);


Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/products', ManageProduct::class)->name('products');
    Route::get('/orders', ManageOrder::class)->name('orders');
    Route::get('/add/product', AddProductForm::class);
    Route::get('/category', ManageCategory::class)->name('category');

});


