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


Route::get('/test/{name?}','PagesController@test');

Route::get('/serie/{serie_id?}','SeriesController@getSerie')->name("serie");

Route::get('/season/{season_id?}','SeriesController@getSeason')->name("season");

Route::get('/user/list', 'PagesController@getUserList')->name('users_list');

Route::get('/role/{role_id?}','RightsController@getRole')->name('role');

Route::get('/role/list','RightsController@getRolesList')->name('role_list');