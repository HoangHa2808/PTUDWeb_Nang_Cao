<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'posts'], function(){
    Route::get('tours', function () { return view('posts.tours'); });
    Route::get('hotel', function () { return view('posts.hotel'); });
    Route::get('news', function () { return view('posts.news'); });
});

// Route::controller(UserController::class)->prefix("user")
//     ->group(function() {
//         Route::get('/index', 'index')->name('user.index');
//         Route::get('/view', 'view')->name('user.view');
//         Route::post('/add', 'add')->name('user.add');
//         Route::post('/delete', 'delete')->name('user.delete');
// });
// Route::group(['prefix' => 'user'], function(){
//     Route::get('index', function () { return view('user.index'); });
//     Route::get('view', function () { return view('user.view'); });
//     Route::get('add', function () { return view('user.add'); });
//     Route::get('delete', function () { return view('user.delete'); });
//     });

// Route::group(['prefix' => 'apps'], function(){
//     Route::get('chat', function () { return view('pages.apps.chat'); });
// });

// Route::group(['prefix' => 'category'], function(){
// Route::get('index', function () { return view('category.index'); });
// });

// Route::group(['prefix' => 'postType'], function(){
// Route::get('index', function () { return view('postType.index'); });
// });

// Route::group(['prefix' => 'feedback'], function(){
// Route::get('index', function () { return view('feedback.index'); });
// });

// Route::group(['prefix' => 'service'], function(){
//     Route::get('drive', function () { return view('service.drive'); });
//     Route::get('orders', function () { return view('service.orders'); });
// });

// Route::group(['prefix' => 'role'], function(){
//     Route::get('index', function () { return view('role.index'); });
// });


// Route::group(['prefix' => 'general'], function(){
//     Route::get('profile', function () { return view('pages.general.profile'); });
// });

// User::routes();

Auth::routes();

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', function () { return view('auth.login'); });
    Route::get('register', function () { return view('auth.register'); });
});

Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error.404');
})->where('page','.*');
