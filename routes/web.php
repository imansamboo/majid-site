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
    return view('mainer');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/inner', function () {
    return view('inner');
});


Route::get('admin/tests', 'Admin\\TestsController@index');
Route::get('admin/tests/create', 'Admin\\TestsController@index2');
Route::get('admin/tests/scrap/url/{url}/menuName/{menuName}/identity/{identity}', 'ShowProfile@testScrapping');

Route::resource('admin/contents', 'Admin\\ContentsController');
Route::resource('admin/menus', 'Admin\\MensController');
Route::resource('admin/photos', 'Admin\\PhotosController');
Route::get('iman', 'ShowProfile@test');
Route::get('iman2', 'ShowProfile@test2');
Route::get('iman3', 'ShowProfile@test3');
Route::get('iman4', 'ShowProfile@test4');
Route::get('iman5', 'ShowProfile@test5');
Route::get('iman6', 'ShowProfile@test6');
Route::get('iman7', 'ShowProfile@scrapSubbestPage');
