<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductDetails;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product-details', ProductDetails::class);
