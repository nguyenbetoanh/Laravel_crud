<?php

use App\Http\Controllers\BookController;
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
//---------------------------------------------- Book -------------------------------------------------
// xem tất cả
Route::get('book', [BookController::class, 'index']);

// tạo mới
Route::get('book/create', [BookController::class, 'create']);
Route::post('book/create', [BookController::class, 'store']);

// cập nhật theo id
Route::get('book/update/{bookId}', [BookController::class, 'findById']);
Route::post('book/update/{bookId}', [BookController::class, 'update']);

//delete theo Id
Route::get('book/delete/{bookId}', [BookController::class, 'delete']);

//search theo tên 
Route::get('book/search/{bookName}', [BookController::class, 'searchByName']);

//---------------------------------------------- Product -------------------------------------------------
// xem tất cả
Route::get('product', [productController::class, 'index']);




