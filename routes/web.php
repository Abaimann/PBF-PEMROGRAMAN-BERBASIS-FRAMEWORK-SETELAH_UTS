<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome.page');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome.page');

Route::get('/about', function () {
    return view('about');
})->name('about.page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');

Route::prefix('manage')->group(function () {
    Route::get('/produk', function () {
        return view('manage.produk');
    })->name('produk.page');

    Route::get('/lokasi', function () {
        return view('manage.lokasi');
    })->name('lokasi.page');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/percobaan', [ProductController::class, 'percobaan']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/product', [ProductController::class, 'index'])->name('product-index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('/product', [ProductController::class, 'store'])->name('product-store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product-show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product-update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product-destroy');

// number
Route::get('/index/{number}', [ProductController::class, 'index'])
->middleware();;


route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// uts
Route::prefix('uts')->name('uts.')->group(function () {
    Route::get('/', [UtsController::class, 'index'])->name('index');  
    Route::get('/pemrograman', [UtsController::class, 'pemrograman'])->name('pemrograman');
    Route::get('/database', [UtsController::class, 'database'])->name('database');
});



require __DIR__.'/auth.php';