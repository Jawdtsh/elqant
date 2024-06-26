<?php

use App\Http\Controllers\ProductController;
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

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::resource('product',ProductController::class)->except([
     'show'
]);
Route::get('product/forcedelete/{id}',[ProductController::class , 'forcdelete'])->name('product.forcedelete');
Route::get('product/showme',[ProductController::class,'showme'])->name('product.showme');
Route::get('product/restore/{id}',[ProductController::class,'restore'])->name('product.restore');
