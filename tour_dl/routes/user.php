<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->prefix("user")
    ->group(function() {
        Route::get('/index', 'index')->name('user.index');
        Route::get('/view', 'view')->name('user.view');
        Route::post('/add', 'add')->name('user.add');
        Route::post('/delete', 'delete')->name('user.delete');
});

// Route::prefix('user')->group(function ()
// {
//     Route::get('/view', [UserController::class, 'view']);
//     Route::get('/index', [UserController::class, 'index']);
//     Route::post('/add', [UserController::class, 'add']);
//     Route::post('/delete', [UserController::class, 'delete']);
// });



// Route::group(['prefix' => 'user'], function(){
    // Route::get('index', function () { return view('user.index'); });
    // Route::get('view', function () { return view('user.view'); });
    // });

    // Route::get('/user', [UserController::class, 'view']);
