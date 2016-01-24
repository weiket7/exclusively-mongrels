<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

  Route::get('/', 'SiteController@index');
  Route::post('contact', 'SiteController@contact');
  Route::get('login', 'SiteController@login');
  Route::get('login2', 'SiteController@login2');
  Route::post('login', 'SiteController@login');
  Route::get('coming-soon', 'SiteController@comingSoon');

  Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', 'AdminController@index');
    Route::post('admin', 'AdminController@index');
    Route::get('admin/request-adoptadog', 'AdminController@requestAdoptadog');
    Route::get('admin/adopt', 'AdminController@adopt');
  });

});