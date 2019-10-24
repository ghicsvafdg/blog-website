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

//route for news
// Route::resources(['news'=>'NewsController']);

        //show list of news
    Route::get('news','NewsController@index');
        //show detail of a news
    Route::get('detail-news/{id}', 'NewsController@show');
        //show list tags of a news
    Route::get('tag-news/{id}', 'NewsController@tagOfNews');
        //show list comment of a news
    Route::get('comment-news/{id}', 'NewsController@listComments');
        //update a news
    Route::put('news/{id}', 'NewsController@update');
        //create a news
    Route::post('news', 'NewsController@store');
        //delete a news
    Route::delete('news/{id}', 'NewsController@destroy');


//route for comments
        // show list of comment
    Route::get('comments','CommentsController@index');
        //show detail of comment
    Route::get('detail-comments/{id}', 'CommentsController@show');
        // update a comment
    Route::put('comments/{id}', 'CommentsController@update');
        //create a comment
    Route::post('comments', 'CommentsController@store');
        //delete a comment
    Route::delete('comments/{id}', 'CommentsController@destroy');

//route for category
        // show list of category
    Route::get('categories','CategoriesController@index');
        // show detail of category
    Route::get('detail-categories/{id}', 'CategoriesController@show');
        // show list news of category
    Route::get('news-categories/{id}', 'CategoriesController@listNews');
        // update detail of category
    Route::put('categories/{id}', 'CategoriesController@update');
        // create a category
    Route::post('categories', 'CategoriesController@store');
        // delete a category
    Route::delete('categories/{id}', 'CategoriesController@destroy');

//route for tag
        //show list of tag
    Route::get('tags','TagsController@index');
        // show detail of a tag
    Route::get('detail-tags/{id}', 'TagsController@show');
        // show list news of tag
    Route::get('list-news/{id}', 'TagsController@listNews');
        // update a tag
    Route::put('tags/{id}', 'TagsController@update');
        // create a tag
    Route::post('tags', 'TagsController@store');
        // delete a tag
    Route::delete('tags/{id}', 'TagsController@destroy');