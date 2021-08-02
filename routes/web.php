<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Categories;

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
    Route::get('/', function () {
        $logged_user_data = User::find(Auth::user()->id)->role()->first();
        return view('admin.home', compact('logged_user_data'));
    })->name('admin');

    Route::get('userslist', function() {
        $users = User::paginate(10);
        return view('admin.users-list', compact('users'));
    })->name('users-list');

    Route::get('categories', function() {
        $categories = Categories::where('deleted', '=', 0)->paginate(4);
        return view('admin.categories', compact('categories'));
    })->name('categories');


    Route::get('categories-table', function() {
        $categories = Categories::where('deleted', '=', 0)->paginate(4);
        return view('admin.categories-table', compact('categories'));
    })->name('categories-table');
    

    Route::post('getUserListTable', 'UsersController@getUserListTable')->name('getUserListTable');
    Route::post('addCategory', 'CategoriesController@addCategory')->name('addCategory');
    Route::post('updateCategoryDisabledState', 'CategoriesController@updateCategoryDisabledState')->name('updateCategoryDisabledState');
    Route::post('deleteCategory', 'CategoriesController@deleteCategory')->name('deleteCategory');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
