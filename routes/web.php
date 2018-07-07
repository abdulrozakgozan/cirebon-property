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
Route::get('/home', 'PagesController@home');
Route::get('/services', 'PagesController@services');
Route::get('/tipe', 'PagesController@tipe');

Route::get('/css', function() {
  return File::get(public_path() . '/css');
});

Route::get('/images', function() {
  return File::get(public_path() . '/images');
});

Route::get('/fonts', function() {
  return File::get(public_path() . '/fonts');
});

Route::get('/js', function() {
  return File::get(public_path() . '/js');
});

Route::get('/myplugin', function() {
  return File::get(public_path() . '/myplugin');
});