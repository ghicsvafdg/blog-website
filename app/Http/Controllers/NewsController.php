<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Resources\News as NewsResource;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::all();
        return NewsResource::collection($news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        News::create([
            'title'=> $request->title,
            'short_intro'=> $request->short_intro,
            'content'=> $request->content,
            'author'=> $request->author,
            'tag'=> $request->tag,
            'comment'=>$request->comment,
            'related_articles'=>$request->related_articles
        ]);

        return News::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        
        return $news;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->input('title');
        $news->short_intro = $request->input('short_intro');
        $news->content = $request->input('content');
        $news->author= $request->input('author');
        $news->comment= $request->input('comment');
        $news->tag = $request->input('tag');
        $news->related_articles = $request->input('related_articles');
        $news->save();
        return News::all();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return News::all();
    }
}
