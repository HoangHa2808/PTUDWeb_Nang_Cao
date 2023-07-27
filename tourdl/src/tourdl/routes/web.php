<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Posts\HotelController;
use App\Http\Controllers\Posts\ToursController;
use App\Http\Controllers\Posts\NewsPostController;
use App\Http\Controllers\Service\DriveController;
use App\Http\Controllers\Service\OrderController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index']);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::get('/posts/hotel', [HotelController::class, 'index'])->name('posts.hotel.index');
Route::get('/posts/hotel/create', [HotelController::class, 'create'])->name('posts.hotel.create');
Route::post('/posts/hotel/create', [HotelController::class, 'store'])->name('posts.hotel.store');
Route::get('/posts/hotel/edit/', [HotelController::class, 'edit'])->name('posts.hotel.edit');
Route::put('/posts/hotel/update/', [HotelController::class, 'update'])->name('posts.hotel.update');
Route::get('/posts/hotel/delete/{id}', [HotelController::class, 'destroy'])->name('posts.hotel.destroy');

Route::get('/posts/tours', [ToursController::class, 'index'])->name('posts.tours.index');
Route::get('/posts/tours/create', [ToursController::class, 'create'])->name('posts.tours.create');
Route::post('/posts/tours/create', [ToursController::class, 'store'])->name('posts.tours.store');
Route::get('/posts/tours/edit/{id}', [ToursController::class, 'edit'])->name('posts.tours.edit');
Route::get('/posts/tours/delete/{id}', [ToursController::class, 'destroy'])->name('posts.tours.destroy');

Route::get('/posts/news', [NewsPostController::class, 'index'])->name('posts.news.index');
Route::get('/posts/news/create', [NewsPostController::class, 'create'])->name('posts.news.create');
Route::post('/posts/news/create', [NewsPostController::class, 'store'])->name('posts.news.store');
Route::get('/posts/news/edit/', [NewsPostController::class, 'edit'])->name('posts.news.edit');
Route::put('/posts/news/update/', [NewsPostController::class, 'update'])->name('posts.news.update');
Route::get('/posts/news/delete/{id}', [NewsPostController::class, 'destroy'])->name('posts.news.destroy');


Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role/create', [RoleController::class, 'create'])->name('role.store');
Route::post('/role/delete/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/service/drive', [DriveController::class, 'index'])->name('service.drive.index');
Route::get('/service/drive/create', [DriveController::class, 'create'])->name('service.drive.create');
Route::get('/service/drive/create', [DriveController::class, 'store'])->name('service.drive.store');
Route::get('/service/drive/delete/{id}', [DriveController::class, 'destroy'])->name('service.drive.destroy');

Route::get('/service/order', [OrderController::class, 'index'])->name('service.order.index');
Route::get('/service/order/create', [OrderController::class, 'create'])->name('service.order.create');
Route::get('/service/order/create', [OrderController::class, 'store'])->name('service.order.store');
Route::get('/service/order/delete/{id}', [OrderController::class, 'destroy'])->name('service.order.destroy');

require __DIR__.'/auth.php';
