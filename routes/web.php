<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductDetails;
use App\Livewire\AdminDashboard;
use App\Livewire\ManageProduct;
use App\Livewire\ManageOrder;
use App\Livewire\ManageCategory;
use App\Livewire\AddProductForm;
use App\Livewire\AddCategoryForm;
use App\Livewire\EditProduct;
use App\Livewire\EditCategory;
use App\Livewire\ShoppingCartDetails;
use App\Livewire\ContactUs;


Route::get('/', function () {
    return view('welcome');
});

Route::get('product-details/{product_id}', ProductDetails::class);
Route::get('shopping-cart', ShoppingCartDetails::class);
Route::get('contact-us', ContactUs::class)->name('contact.us');


Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/products', ManageProduct::class)->name('products');
    Route::get('/orders', ManageOrder::class)->name('orders');
    Route::get('/add/product', AddProductForm::class);
    Route::get('/edit/{id}/product', EditProduct::class);
    Route::get('/category', ManageCategory::class)->name('category');
    Route::get('/add/category', AddCategoryForm::class);
    Route::get('/edit/{id}/category', EditCategory::class);

});


