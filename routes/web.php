<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('admin.home');
// });

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){ 
    Route::get('home', function() {
        return view('admin.home');
    })->name('home.index');

    Route::resources([
        'users' => UserController::class,
        'categories' => CategoryController::class,
        'new_post' => NewPostController::class
    ]);
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
