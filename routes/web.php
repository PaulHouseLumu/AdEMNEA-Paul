<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('home');
});


Route::get('/next', function () {
    return view('next');
});*/

//Auth::routes();


//Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/master', 'App\Http\Controllers\HomeController@master')->name('master');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/test', 'HomeController@test')->name('test');
//Route::get('/about', 'TestController@about')->name('about');


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//According to Laravel 8, routes should be declared this way

//Route::get('/home', [HomeController::class, 'index'])->name('home');
