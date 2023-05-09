<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\HotelController;

Route::controller(HotelController::class)->prefix("/posts/tours")
    ->group(function() {
        Route::get('/index', 'index')->name('tours.index');
        Route::get('/view', 'view')->name('tours.view');
        Route::post('/add', 'add')->name('tours.add');
        Route::post('/delete', 'delete')->name('tours.delete');
});
