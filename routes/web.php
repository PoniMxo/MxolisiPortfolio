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
    return view('home');
});

Route::get('/about', function(){
    return view('/about');
});

Route::get('/portfolio', function () {
    return view('/portfolio');
});


Route::get('/create', function () {
    return view('/blog.create');
});

Route::get('/blogs', 'BlogController@index');

Route::get('users/{id}', 'UserController@profile');

Route::get('articles', 'ArticleController@index');
// Route::get('blogs', 'BlogController@index');
//list single article
Route::get('article/{id}', 'ArticleController@show');

//Create new article
Route::get('article', 'ArticleController@store');

Route::get('create', 'ArticleController@create');

//update article
Route::put('article', 'ArticleController@store');

//delete article
Route::delete('article/{id}', 'ArticleController@destroy');

//This is the Portfolio section

Route::get('user/profile', 'UserProfileController@show')->name('profile');
