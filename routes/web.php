<?php

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
    return view('index');
});
Route::get('/posts', [HomeController::class, 'index'])->name('posts');

Route::get('/create', [PostController::class, 'create'])->name('create');
//not an blade file, not a form, but rather an action of actual saving of data from the form to the database
Route::post('store', [PostController::class, 'store'])->name('store');
Route::get('displaypost/{id}', [PostController::class, 'displaypost'])->name('displaypost');
Route::get('edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::post('update', [PostController::class, 'update'])->name('update');
Route::post('delete', [PostController::class, 'delete'])->name('delete');
Route::post('destroy/{id}', [PostController::class, 'destroy'])->name('destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
