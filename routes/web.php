<?php

use App\Http\Controllers\CalligraphiesController;
use App\Http\Controllers\CalligraphyCategoriesController;
use App\Http\Controllers\CalligraphyStylesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryImagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
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


// Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Home Page
Route::middleware(['web', 'VisitorCounter'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/category', [HomeController::class, 'category'])->name('home.category');
    Route::get('/gallery', [HomeController::class, 'gallery'])->name('home.gallery');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('home.send-email');
    Route::get('/about', [HomeController::class, 'about'])->name('home.about');
});

Route::get('/authenticate', [HomeController::class, 'authenticate'])->name('home.authenticate');
// GeoLocation
Route::post('/get-location-data', [LocationController::class,'getLocationData']);

// Admin Page
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.index');

    Route::resource('categories', CalligraphyCategoriesController::class);
    Route::resource('styles', CalligraphyStylesController::class);
    Route::resource('calligraphies', CalligraphiesController::class);
    Route::resource('feedback', FeedbackController::class);
    Route::resource('gallery', GalleryImagesController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RolesController::class);
});

require __DIR__.'/auth.php';
