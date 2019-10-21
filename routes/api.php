<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//news
Route::get('news','NewsController@index');

Route::get('detail-news/{id}', 'NewsController@show');

Route::get('comment-news/{id}', 'NewsController@listComments');

Route::put('news/{id}', 'NewsController@update');

Route::post('news', 'NewsController@store');

Route::delete('news/{id}', 'NewsController@destroy');

//comments
Route::get('comments','CommentsController@index');

Route::get('detail-comments/{id}', 'CommentsController@show');

Route::put('comments/{id}', 'CommentsController@update');

Route::post('comments', 'CommentsController@store');

Route::delete('comments/{id}', 'CommentsController@destroy');

//Category
Route::get('categories','CategoriesController@index');

Route::get('detail-categories/{id}', 'CategoriesController@show');

Route::get('news-categories/{id}', 'CategoriesController@listNews');

Route::put('categories/{id}', 'CategoriesController@update');

Route::post('categories', 'CategoriesController@store');

Route::delete('categories/{id}', 'CategoriesController@destroy');

//tag
Route::get('tags','TagsController@index');

Route::get('detail-tags/{id}', 'TagsController@show');

// Route::get('news-categories/{id}', 'TagsController@listNews');

Route::put('tags/{id}', 'TagsController@update');

Route::post('tags', 'TagsController@store');

Route::delete('tags/{id}', 'TagsController@destroy');