<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Player;
use App\Blog;

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
  $products = Product::all();  
  $players = Player::all();
  $blogs = Blog::all();
  return view('index',['products'=>$products , 'players'=>$players , 'blogs'=>$blogs]);
});

Route::get('/faq', function(){
		return view('faq');
})->name('faq');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/blogs', function () {
    return view('blogArchive');
})->name('blogArchive');

Route::get('/blogs/{slug}',function($slug){
		return view('blogSingle');
})->name('blogSingle');

Route::get('/products', function () {
    $products = Product::all();
    return view('products',['products' => $products]);
})->name("AllProducts");

Route::get('/products/{slug}',function($slug){
		return view('productsSingle');
})->name('product');

Route::get('/players',function(){
		return view('playersArchive');
})->name('AllPlayers');

Route::get('/profile/cart',function(){
		return view('cart');
})->name('cart');

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
