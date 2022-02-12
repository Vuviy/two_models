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
    return view('main');
})->name('home');

Route::group(['prefix' => 'admin_news', 'namespace' => 'App\Http\Controllers\News\Admin\\'], function () {
    Route::get('/', 'MainController@index')->name('admin_news.index');
    Route::resource('/novelties', 'NoveltyController');
});


Route::group(['prefix' => 'user_news', 'namespace' => 'App\Http\Controllers\News\User\\'], function () {
    Route::get('/', 'MainController@index')->name('user_news.index');
    Route::get('/news', 'NoveltyController@index')->name('news.index');
    Route::get('/news/{id}', 'NoveltyController@show')->name('news.show');
});

Route::group(['prefix' => 'admin_comment', 'namespace' => 'App\Http\Controllers\Comment\Admin\\'], function () {
    Route::get('/', 'MainController@index')->name('admin_comment.index');
    Route::resource('/comments_ad', 'CommentController');
});

Route::group(['prefix' => 'user_comments', 'namespace' => 'App\Http\Controllers\Comment\User\\'], function () {
    Route::get('/', 'MainController@index')->name('user_comments.index');
    Route::resource('/comments', 'CommentController');
});
