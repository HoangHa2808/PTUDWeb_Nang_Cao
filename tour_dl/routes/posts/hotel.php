<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\HotelController;

Route::controller(HotelController::class)->prefix("/posts/hotel")
    ->group(function() {
        Route::get('/index', 'index')->name('hotel.index');
        Route::get('/view', 'view')->name('hotel.view');
        Route::post('/add', 'add')->name('hotel.add');
        Route::post('/delete', 'delete')->name('hotel.delete');
});
