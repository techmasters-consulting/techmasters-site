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


Route::get('/', 'HomeController@index')->name('public.index');
Route::get('/about', 'HomeController@about')->name('public.about');
Route::get('/contact', 'HomeController@contact')->name('public.contact');
Route::post('send/email', 'HomeController@emailservice');
// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
