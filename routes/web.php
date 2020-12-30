<?php

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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/cart', function () {
    return view('cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/edit', function() {
    return view('profile.editprofile');
});
Route::get('/user/profile', 'ProfileController@index')->name('profile');

Route::get('/product/create', 'ItemController@create');
Route::post('/product/store', 'ItemController@store');

Route::get('detail/{id}', 'DetailController@index');

Route::get('/cart', 'ProductController@index');

<<<<<<< HEAD
Route::post('pesan/{id}', 'ProductController@pesan');
=======
Route::post('pesan/{id}', 'ProductController@pesan');

Route::get('/cart', function () {
    return view('cart');
    });
>>>>>>> b2decccfb26f8abb4f5ba68667d99ebbdac8aa74
