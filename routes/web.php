<?php

use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('post/create', [PostController::class, 'create']);
//
//Route::post('post', [PostController::class, 'store'])->name('post.store');
//
//Route::get('post', [PostController::class, 'index']);

//CHAPTER5用
Route::get('product/create', [ProductController::class, 'create']);

Route::post('product', [ProductController::class, 'store'])->name('product.store');

Route::get('product', [ProductController::class, 'index'])->name('product.index');


//Route::get('/products', [ProductController::class, 'index']);

//Route::get('/CHAPTER2', function () {
//    return view('CHAPTER2');
//})->middleware(['auth', 'verified'])->name('CHAPTER2');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
