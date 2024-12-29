<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/product', [HomepageController::class, 'allProduct'])->name('product-all');
Route::get('/product/detail/{id}', [HomepageController::class, 'detail'])->name('product-detail');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [HomepageController::class, 'login'])->name('login');
    Route::post('/login', [HomepageController::class, 'doLogin'])->name('doLogin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomepageController::class, 'dashboard'])->name('main.dasboard');
    Route::get('/logout', [HomepageController::class, 'logout'])->name('logout');

    Route::get('/dashboard/product', [ProductController::class, 'index'])->name("product.index");
    Route::get('/dashboard/product/create', [ProductController::class, 'create'])->name("product.create");
    Route::post('/dashboard/product/store', [ProductController::class, 'store'])->name("product.store");
    Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'edit'])->name("product.edit");
    Route::put('/dashboard/product/update/{id}', [ProductController::class, 'update'])->name("product.update");
    Route::delete('/dashboard/product/delete/{id}', [ProductController::class, 'destroy'])->name("product.destroy");


    Route::get('/dashboard/testimoni', [TestimoniController::class, 'index'])->name("testimoni.index");
    Route::get('/dashboard/testimoni/create', [TestimoniController::class, 'create'])->name("testimoni.create");
    Route::post('/dashboard/testimoni/store', [TestimoniController::class, 'store'])->name("testimoni.store");
    Route::get('/dashboard/testimoni/edit/{id}', [TestimoniController::class, 'edit'])->name("testimoni.edit");
    Route::put('/dashboard/testimoni/update/{id}', [TestimoniController::class, 'update'])->name("testimoni.update");
    Route::delete('/dashboard/testimoni/delete/{id}', [TestimoniController::class, 'destroy'])->name("testimoni.destroy");
});
