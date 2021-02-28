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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'PageController@home')->name('home');
Route::get('blog', 'PageController@blog')->name('blog');
Route::get('vue_categories', 'PageController@vue_categories')->name('vue_categories');
Route::get('vue_articles', 'PageController@vue_articles')->name('vue_articles');
Route::get('vue_tags', 'PageController@vue_tags')->name('vue_tags');

Route::resource('articles', 'ArticleController');
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');







