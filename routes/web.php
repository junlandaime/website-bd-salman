<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/rapihan', [FrontController::class, 'rapih'])->name('front.rapih');

Route::get('/events', [FrontController::class, 'events'])->name('front.events');
Route::get('/events/{event:slug}', [FrontController::class, 'details'])->name('front.details');

Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');

Route::get('/features', [FrontController::class, 'features'])->name('front.features');

Route::get('/informations', [FrontController::class, 'informations'])->name('front.informations');
Route::get('/informations/{post:slug}', [FrontController::class, 'infomore'])->name('front.infomore');

Route::get('/blogs', [FrontController::class, 'blogs'])->name('front.blogs');
Route::get('/blogs/{post:slug}', [FrontController::class, 'readmore'])->name('front.readmore');


Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/tentang/{post:slug}', [FrontController::class, 'tentang'])->name('front.tentang');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('categories', CategoryController::class)->middleware('role:superadmin|admin');
        Route::resource('posts', PostController::class)->middleware('role:superadmin|admin|kapro');
        Route::get('/layanan', [PostController::class, 'profile'])->middleware('role:superadmin|admin|kapro')->name('posts.profile');

        Route::get('/posts/{post}', [PostController::class, 'toggle'])->name('posts.toggle');


        Route::resource('events', EventController::class)->middleware('role:superadmin|admin|kapro');

        Route::resource('photos', PhotoController::class)->middleware('role:superadmin|admin|kapro');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
});

require __DIR__ . '/auth.php';
