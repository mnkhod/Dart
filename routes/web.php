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
})->name("homePage");

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
  $blogs = Blog::all();  
  return view('blogArchive',['blogs' => $blogs]);
})->name('blogArchive');

Route::get('/blogs/{slug}',function($slug){
    $blog = Blog::where('id',$slug)->first();
		return view('blogSingle',['blog' => $blog]);
})->name('blogSingle');

Route::get('/products', function () {
    $products = Product::all();
    return view('products',['products' => $products]);
})->name("AllProducts");

Route::get('/products/{slug}',function($slug){
    $product = App\Product::where('id',$slug)->first();
		return view('productsSingle',['product' => $product]);
})->name('productSingle');

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
