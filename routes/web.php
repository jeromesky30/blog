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


//not an blade file, not a form, but rather an action of actual saving of data from the form to the database
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('displaypost/{id}', [PostController::class, 'displaypost'])->name('displaypost');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{id}/delete', 'PostController@delete')->name('posts.delete');
Route::post('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::post('destroy/{id}', [PostController::class, 'destroy'])->name('destroy');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');








