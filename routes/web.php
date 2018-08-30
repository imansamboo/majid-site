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
Route::get('/inner', function () {
    return view('inner');
});
Route::get('admin/tests', 'Admin\\TestsController@index');

Route::resource('admin/contents', 'Admin\\ContentsController');
Route::resource('admin/menus', 'Admin\\MensController');
Route::resource('admin/photos', 'Admin\\PhotosController');
