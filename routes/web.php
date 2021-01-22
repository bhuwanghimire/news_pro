<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ListingPageController;
use App\Http\Controllers\DetailsPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PostController;


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
//     return view('welcome');
// });

Route::get('/', [HomePageController::class, 'index']);
Route::get('/listing', [ListingPageController::class, 'index']);
Route::get('/details', [DetailsPageController::class, 'index']);




Route::group(['prefix'=>'back','middleware'=>'auth'],function(){
    Route::get('/',[DashboardController::class,'index']);
    // Route::get('/category',[CategoryController::class,'index',]);
    // Route::get('/category/create',[CategoryController::class,'create']);
    // Route::get('/category/edit',[CategoryController::class,'edit',]);


    Route::resource('profile', ProfileController::class);
    Route::resource('category', CategoryController::class);
    Route::get('/status/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'status'])->name('status.category');
    Route::resource('post', PostController::class);
    Route::get('/status/{id}', [App\Http\Controllers\Admin\PostController::class, 'status'])->name('status.post');

    

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
