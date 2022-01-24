<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('people', [App\Http\Controllers\PeopleController::class, 'index'])->name('list-people');
Route::get('create-people', [App\Http\Controllers\PeopleController::class, 'create'])->name('create-people');
Route::post('store-people', [App\Http\Controllers\PeopleController::class, 'store'])->name('store-people');
Route::get('view-people/{id}', [App\Http\Controllers\PeopleController::class, 'show'])->name('show-people')->where('id', '[0-9]+');
Route::get('edit-people/{id}', [App\Http\Controllers\PeopleController::class, 'edit'])->name('edit-people')->where('id', '[0-9]+');
Route::post('update-people', [App\Http\Controllers\PeopleController::class, 'update'])->name('update-people');