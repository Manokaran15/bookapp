<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-details', function () {
    return view('user_details');
});

Route::get('/books-details', function () {
    return view('books_details');
});

Route::get('/search-book', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/user-details', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);

Route::get('callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

Route::post('/books-details', [App\Http\Controllers\HomeController::class, 'fetchBook']);

Route::post('/add-book', [App\Http\Controllers\HomeController::class, 'addBook']);

Route::get('/delete-book/{id}', [App\Http\Controllers\HomeController::class, 'delete']);


