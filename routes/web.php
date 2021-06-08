<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// cara 3- tapi bukan utk database
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// cara 1
Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create']);

// cara 2
// use App\Http\Controllers\PostController; -apache cakap kena ada
Route::post('post', 'App\Http\Controllers\PostController@store');

// posts(table, folder), post(variable)
Route::get('posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::get('posts/{post}', [App\Http\Controllers\PostController::class, 'show']);
Route::put('posts/{post}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('posts/{post}', [App\Http\Controllers\PostController::class, 'destroy']);
