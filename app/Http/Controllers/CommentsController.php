<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Tags;

class CommentsController extends Controller
{
    //show list of comment
    public function index()
    {
        $cmt=Comments::all();
        return $cmt;
        // return view ('news',compact('news'));
    }

    //create a new comment
    public function store(Request $request)
    {
        Comments::create([
            'news_id'=>$request->news_id,
            'username'=> $request->username,
            'content'=> $request->content,
        ]);
        
        $news_id = $request->news_id;
        return redirect()->route('detail-news', $news_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $cmt = Comments::find($id);
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
        $comment = Comments::find($id);
        $comment->username = $request->input('username');
        $comment->content = $request->input('content');
        $comment->save();
        $news_id = $comment->news_id;
        return redirect()->route('detail-news', $news_id);
    }

    //delete a comment
    public function destroy($id)
    {
        $cmt = Comments::find($id);
        $new_id = $cmt->news_id;
        $cmt->delete();

        // return dd($cmt);
        return redirect()->route('detail-news', $new_id);
    }

    public function edit($id){
        $cate = Categories::all()->where('id', $id);
        $cate1 = Categories::all('id', 'cate_name');
        $tag1 = Tags::all();

        $comment = Comments::all()->where('id', $id);
        
        // return dd($cate);
        return view('editComment', compact('cate1', 'tag1', 'cate', 'comment'));
    }
}
