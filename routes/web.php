<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers;
use App\Http\Controllers\CollectionController;

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

Route::namespace('App\Http\Controllers\Main')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    });

//Страница категории
Route::get('category/{code}', 'App\Http\Controllers\CategoryController@show')->name('category.show');
//Страница коллекции
Route::get('collection/{code}', 'App\Http\Controllers\CollectionController@show')->name('collection.show');    
//Страница товара
Route::get('product/{article}', 'App\Http\Controllers\ProductController@show')->name('product.show');
/*Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
