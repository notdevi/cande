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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/user/edit', function() {
    return view('profile.editprofile');
});
=======

Route::get('detail/{id}', 'DetailController@index');
>>>>>>> f7ab6c2278dda3c90cefcb65e1ad188a6600b632
