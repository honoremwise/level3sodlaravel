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
//Load the product blade file
Route::get('/', function () {
    return view('product');
});
//Add a new product
Route::post('/save', 
[App\Http\Controllers\ProductController::
class, 'store'])->name('save');
// retrieve report
Route::get('/report', 
[App\Http\Controllers\ProductController::
class, 'retrieve'])->name('report');
