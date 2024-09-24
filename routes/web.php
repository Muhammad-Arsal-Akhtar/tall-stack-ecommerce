<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductDetails;
use App\Livewire\AdminDashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product-details', ProductDetails::class);

Route::get('admin/dashboard', AdminDashboard::class)->middleware(['admin']);
