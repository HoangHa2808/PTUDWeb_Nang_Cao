<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\NewsController;

Route::controller(NewsController::class)->prefix("/posts/news")
    ->group(function() {
        Route::get('/index', 'index')->name('news.index');
        Route::get('/view', 'view')->name('news.view');
        Route::post('/add', 'add')->name('news.add');
        Route::post('/delete', 'delete')->name('news.delete');
});
