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

Route::get('/', function () {
    return view('index');
});

Route::get('/faq', function(){
		return view('faq');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/categories', function () {
    return view('categories');
});


Route::get('/blogs', function () {
    return view('blogArchive');
});

Route::get('/blogs/{slug}',function($slug){
		return view('blogSingle');
});

Route::get('/products', function () {
    return view('products',['products' => null]);
});

Route::get('/products/{slug}',function($slug){
		return view('productsSingle');
});


Route::get('/players',function(){
		return view('playersArchive');
});


Route::get('/profile/cart',function(){
		return view('cart');
});


Route::get('/profile/account',function(){
    return view('account');
});



Route::get('/logout',function(){
  Auth::logout();
  return redirect('/');
});










Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
