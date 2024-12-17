<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
    return view('dashboard.login');
});




Route::get('/product',[ProductController::class, 'index'])->name("product.index");
Route::get('/product/create',[ProductController::class, 'create'])->name("product.create");
Route::post('/product/store',[ProductController::class, 'store'])->name("product.store");
Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name("product.edit");
Route::put('/product/update/{id}',[ProductController::class, 'update'])->name("product.update");
Route::delete('/product/delete/{id}',[ProductController::class, 'destroy'])->name("product.destroy");

