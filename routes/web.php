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

Route::resource('admin/alis', 'Admin\\AlisController');
Route::resource('admin/menus', 'Admin\\MenusController');
Route::resource('admin/menu', 'Admin\\MenuController');
Route::resource('admin/menu', 'Admin\\MenuController');
Route::resource('admin/menu', 'Admin\\MenuController');
Route::resource('admin/menus', 'Admin\\MenusController');
Route::resource('admin/contents', 'Admin\\ContentsController');
Route::resource('admin/contents', 'Admin\\ContentsController');
Route::resource('admin/menus', 'Admin\\MenusController');
Route::resource('admin/contents', 'Admin\\ContentsController');
Route::resource('admin/menus', 'Admin\\MenusController');
Route::resource('admin/menu', 'Admin\\MenuController');
Route::resource('admin/mens', 'Admin\\MensController');
Route::resource('admin/contents', 'Admin\\ContentsController');
Route::resource('admin/mens', 'Admin\\MensController');
Route::resource('admin/contents', 'Admin\\ContentsController');