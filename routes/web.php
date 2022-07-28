<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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
Route::get('/index_user', [UserController::class,'index']

);
Route::get('/create_user', [UserController::class,'create']

);
Route::get('/update_user', [UserController::class,'update']

);
Route::get('/index_book', [BookController::class,'index']

);
Route::get('/create_book', [BookController::class,'create']

);
Route::get('/update_book', [BookController::class,'update']

);
