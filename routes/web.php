<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductDetails;
use App\Livewire\AdminDashboard;
use App\Livewire\ManageProduct;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product-details', ProductDetails::class);

Route::get('admin/dashboard', AdminDashboard::class)->middleware(['admin'])->name('dashboard');

Route::get('admin/products', ManageProduct::class)->middleware(['admin'])->name('products');

Route::get('admin/orders', ManageOrder::class)->middleware(['admin'])->name('orders');

