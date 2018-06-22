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
    return view('home');
});


Auth::routes();
Route::get('/home/{show?}', 'HomeController@index')->name('home');
Route::get('/home/{id?}/detail', 'HomeController@detail');



Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function (){

    Route::get('/', 'Admin\AdminController@index');

    Route::group(['prefix'=>'user'], function (){
        Route::get('/users', 'UsersController@index')->name('users');
        Route::get('/edit', 'UsersController@edit')->name('user/edit');
        Route::post('/edit', 'UsersController@postedit')->name('edit');
        Route::get('/add', 'UsersController@getAdd')->name('getadd');
        Route::post('/add', 'UsersController@postAdd')->name('postadd');
    });
});