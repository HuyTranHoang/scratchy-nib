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



// Home Page
Route::middleware(['web', 'VisitorCounter'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/category', [HomeController::class, 'category'])->name('home.category');
    Route::get('/gallery', [HomeController::class, 'gallery'])->name('home.gallery');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/about', [HomeController::class, 'about'])->name('home.about');
    Route::get('/detail/{calligraphy}', [HomeController::class, 'detail'])->name('home.detail');
    Route::get('/sitemap', [HomeController::class, 'sitemap'])->name('home.sitemap');
    // Feedback in detail
    Route::post('/store-feedback', [HomeController::class, 'storeFeedback'])->name('home.store-feedback');
    Route::post('/update-feedback/{feedback}', [HomeController::class, 'updateFeedback'])->name('home.update-feedback');
    Route::delete('/delete-feedback', [HomeController::class, 'deleteFeedback'])->name('home.delete-feedback');

    // View other user profile ( Guest can see too )
    Route::get('profile/{user}', [HomeController::class, 'showUser'])->name('home.show-user');
});

// User profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Geo Location
Route::post('/get-location-data', [LocationController::class,'getLocationData']);
// Send Email
Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('send-email');
// Newsleter Subscriber
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');

// Admin Page

Route::middleware(['web','CheckIsAdmin'])->prefix('admin')->group(function () {
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
