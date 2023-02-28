<?php

use App\Http\Controllers\CalligraphyCategoriesController;
use App\Http\Controllers\HomeController;
use App\Models\CalligraphyCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Page
Route::get('/', [HomeController::class,'index']);
Route::get('/gallery', [HomeController::class,'gallery']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/about', [HomeController::class,'about']);


// Admin Page
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('category', CalligraphyCategoriesController::class);
});
