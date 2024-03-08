<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\ProductController;
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
});

//Route::get('/', function () {
//    return view('welcome');
//})->middleware('can:test');

//Route::get('/', [ProfileController::class, 'welcome'])->middleware('auth');
Route::get('/', [ProfileController::class, 'welcome'])->middleware('auth.check');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//CHAPTER8章用
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth.check'])->name('dashboard');

Route::get('post/create', [PostController::class, 'create'])->middleware('auth.check');

Route::post('post', [PostController::class, 'store'])->name('post.store');

Route::get('post/index', [PostController::class, 'index'])->middleware('auth.check')->name('post.index');


//Route::get('post/create', [PostController::class, 'create'])->middleware(['auth', 'admin']);
//
//Route::post('post', [PostController::class, 'store'])->name('post.store');
//
//Route::get('post/index', [PostController::class, 'index'])->middleware(['auth', 'admin'])->name('post.index');



//Route::get('/products', [ProductController::class, 'index']);

Route::get('/profile', function() {
    return view('profile.edit');
})->middleware('auth.check');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
