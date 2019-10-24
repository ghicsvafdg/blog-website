<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Comments;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Http\Resources\News as NewsResource;

class NewsController extends Controller
{

     //return list of all news
    public function index()
    {
        $news = News::all();
        // return $news;
        return view ('news',compact('news'));
    }

     //create a news
    public function store(Request $request)
    {
        News::create([
            'title'=> $request->title,
            'cate_id'=> $request->cate_id,
            'short_intro'=> $request->short_intro,
            'content'=> $request->content,
            'author'=> $request->author,
            'file_name'=>$request->file_name,
            'tag_id'=> $request->tag,
            'comment'=>$request->comment,
            'related_articles'=>$request->related_articles
        ]);
        return News::all();
    }


    //return the detail of a news
    public function show($id)
    {
        $news = News::find($id);
        // $comment = News::find($id)->comments()->get();
        $comment = Comments::all()->where('news_id', $id);
        // $category = News::find($id)->categories()->get();
        // $category = $news->category;
        // return dd($category);
        // // return $news;
        return view ('detail',compact('news', 'comment'));
    }

    //show list tags of a news
    public function tagOfNews($id)
    {
        $listTag = News::find($id)->tags()->get();
           
        return $listTag;
    }

    

    //return list comment of a news
    public function listComments($id){
        $comment = News::find($id)->comments()->get();
        // $comment = $news->comments;
        // $cmt = Comments::all()->where('news_id', $id);
        // $content = $cm;
        // return $cmt;    
        return view ('detail',compact('comment'));
        // return $;
    }

    
     //update detail of a news
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->input('title');
        $news->short_intro = $request->input('short_intro');
        $news->short_intro = $request->input('file_name');
        $news->content = $request->input('content');
        $news->author= $request->input('author');
        // $news->comment= $request->input('comment');
        $news->tag = $request->input('tag');
        $news->related_articles = $request->input('related_articles');
        $news->save();
        return News::all();

    }

    

     //delete a news
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return News::all();
    }
}
