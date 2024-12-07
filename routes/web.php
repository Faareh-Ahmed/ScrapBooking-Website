<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

// Route::get('/services', function () {
//     return view('services');
// })->middleware(['auth', 'verified'])->name('services');

// Using Controller:

Route::get('/services', [ProductController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('services');

    Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);

// Route::get('/services', [ProductController::class, 'index'])->name('products.index');
// Route::post('/services', [ProductController::class, 'store'])->name('products.store');
// Route::delete('/services/{index}', [ProductController::class, 'destroy'])->name('products.destroy');



Route::get('/announcements', function () {
    return view('announcements');
})->middleware(['auth', 'verified'])->name('announcements');


Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
