<?php

use App\Http\Controllers\API\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/api/category', [CategoryController::class, 'index'])->name('api.category.index');
// Route::get('/api/category/create', [CategoryController::class, 'create'])->name('api.category.create');
// Route::post('/api/category/create', [CategoryController::class, 'store'])->name('api.category.store');
// Route::get('/api/category/edit/{id}', [CategoryController::class, 'edit'])->name('api.category.edit');
// Route::put('/api/category/update/{id}', [CategoryController::class, 'update'])->name('api.category.update');
// Route::get('/api/category/delete/{id}', [CategoryController::class, 'destroy'])->name('api.category.delete');

Route::controller(CategoryController::class)->group(function () {
    Route::get('category', 'index');
    Route::get('category/create', 'create');
    Route::post('category/create', 'store');
    Route::get('category/edit/{id}', 'edit');
    Route::put('category/update/{id}', 'update');
    Route::get('category/delete/{id}', 'destroy');

});

// Route::get('category/getAll', 'API\CategoryController@getAll')->name('category.getAll');
