<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagsController extends Controller
{
    
    //show list of tags
    public function index()
    {
        $tag = Tags::all();
        return $tag;
        // return view ('news',compact('news'));
    }

    
    // create new tag
    public function store(Request $request)
    {
        Tags::create([
            'tag_name'=> $request->tag_name,
        ]);

        return Tags::all();
    }

    // show detail of a tag
    public function show($id)
    {
        $tag = Tags::find($id);
        return $tag;
        // return view ('detail',compact('news'));
    }


    // show list news of tag
    public function listNews($id)
    {
        $listNews = Tags::find($id)->news()->get();
        return $listNews;
        // return view ('detail',compact('news'));
    }


    //update a tag
    public function update(Request $request, $id)
    {
        $tag = Tags::find($id);
        $tag->tag_name = $request->input('tag_name');
        $tag->save();
        return Tags::all();

    }

    //delete a tag
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return Tags::all();
    }
}
