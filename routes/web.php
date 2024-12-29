<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('public.index');
})->name('home');

Route::get('/product', function(){
    return view('public.all-product');
})->name('product');

Route::get('/product/detail', function(){
    return view('public.detail-product');
})->name('product-detail');

Route::get('/login', function(){
    return view('dashboard.login');
})->name('login');


Route::get('/dashboard', function(){
    $totalProducts = Product::count();
    $soldProducts = Product::where('status', 'terjual')->count();
    $forSaleProducts = Product::where('status', 'dijual')->count();
    return view('dashboard.main', compact('totalProducts', 'soldProducts', 'forSaleProducts'));})
->name('main.dasboard');




Route::get('/dashboard/product',[ProductController::class, 'index'])->name("product.index");
Route::get('/dashboard/product/create',[ProductController::class, 'create'])->name("product.create");
Route::post('/dashboard/product/store',[ProductController::class, 'store'])->name("product.store");
Route::get('/dashboard/product/edit/{id}',[ProductController::class, 'edit'])->name("product.edit");
Route::put('/dashboard/product/update/{id}',[ProductController::class, 'update'])->name("product.update");
Route::delete('/dashboard/product/delete/{id}',[ProductController::class, 'destroy'])->name("product.destroy");

