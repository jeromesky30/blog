<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [PostController::class, 'create'])->name('create');

Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('displaypost/{id}', [PostController::class, 'displaypost'])->name('displaypost');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit'); 
Route::post('/update/{id}', [PostController::class, 'update'])->name('update');
 
Route::get('/destroy/{id}', [PostController::class, 'destroy'])->name('destroy');











