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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/detail/{id}', function ($id) {
//     $mov = Movies::where('id',$id)->get();
//     return view('show',compact('mov'));
// });
Route::get('/', 'HomeController@index')->name('movie.index');
Route::get('/detail/{id}','HomeController@detailPages');
Route::get('/kategori/{id}','HomeController@categoryList');


