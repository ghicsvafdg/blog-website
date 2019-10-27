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

        //show list of news
    Route::get('news','NewsController@index')->name('news');
        //show detail of a news
    Route::get('detail-news/{id}', 'NewsController@show')->name('detail-news');
        //show list tags of a news
    Route::get('tag-news/{id}', 'NewsController@tagOfNews');
        //show list comment of a news
    Route::get('comment-news/{id}', 'NewsController@listComments');
        //update a news
    Route::get('edit/{id}', 'NewsController@edit')->name('edit');
        //create a news
    Route::post('news', 'NewsController@store')->name('create-news');
        //delete a news
    Route::delete('delete-news/{id}', 'NewsController@destroy')->name('delete');

    Route::get('create', 'NewsController@create')->name('create');

    Route::patch('update/{id}', 'NewsController@update')->name('update');

    


//route for comments
        // show list of comment
    Route::get('comments','CommentsController@index');
        //show detail of comment
    Route::get('detail-comments/{id}', 'CommentsController@show');
        // update a comment
    Route::put('comments/{id}', 'CommentsController@update');
        //create a comment
    Route::post('comments', 'CommentsController@store')->name('create-comment');
        //delete a comment
    Route::delete('comments/{id}', 'CommentsController@destroy');


//route for category
        // show list of category
    Route::get('categories','CategoriesController@index')->name('category');
        // show detail of category
    Route::get('detail-categories/{id}', 'CategoriesController@show');
        // show list news of category
    Route::get('news-categories/{id}', 'CategoriesController@listNews')->name('news-categories');
        // update detail of category
    Route::patch('categories/{id}', 'CategoriesController@update')->name('update-category');
        // create a category
    Route::post('categories', 'CategoriesController@store')->name('create-new-category');
        // delete a category
    Route::delete('categories/{id}', 'CategoriesController@destroy')->name('delete-cate');

    Route::get('edit-categories/{id}', 'CategoriesController@edit')->name('edit-category');

    Route::get('create-category', 'CategoriesController@create')->name('create-category');
    

//route for tag
        //show list of tag
    Route::get('tags','TagsController@index')->name('tag');
        // show detail of a tag
    Route::get('detail-tags/{id}', 'TagsController@show');
        // show list news of tag
    Route::get('list-news/{id}', 'TagsController@listNews')->name('news-tags');
        // update a tag
    Route::patch('tags/{id}', 'TagsController@update')->name('update-tag');
        // create a tag
    Route::post('tags', 'TagsController@store')->name('create-new-tag');
        // delete a tag
    Route::delete('tags/{id}', 'TagsController@destroy')->name('delete-tag');

    // Route::get('tag-edit/{$id}', 'TagsController@edit')->name('edit-tags');

    Route::get('create-tag', 'TagsController@create')->name('create-tag');

    Route::get('tag-edit/{id}', 'TagsController@edit')->name('edit-tags');