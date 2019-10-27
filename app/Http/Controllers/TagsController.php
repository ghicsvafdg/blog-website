<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagsController extends Controller
{
    
    //show list of tags
    public function index()
    {
        $cate1 = Categories::all();
        $tag1 =  Tags::all();
        $news = News::all();
        return view ('manageTag',compact('news', 'cate1', 'tag1'));
    }
    
    
    // create new tag
    public function store(Request $request)
    {
        Tags::create([
            'tag_name'=> $request->tag_name,
        ]);
            
        return redirect()->route('tag');
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
        $tags = Tags::find($id)->id;
        $cate1 = Categories::all();
        $tag1 = Tags::all();
        $news = News::all()->where('tag_id', $id);
        return view ('newsByTag',compact('news',  'tag1', 'news', 'cate1'));
    }
    
    
    //update a tag
    public function update(Request $request, $id)
    {
        $tag = Tags::find($id);
        $tag->tag_name = $request->input('tag_name');
        $tag->save();
        return redirect()->route('tag');
        
    }
    
    //delete a tag
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return redirect()->route('tag');
    }
    
    //move to edit page
    public function edit($id){
        $cate = Categories::all();
        $cate1 = Categories::all('id', 'cate_name');
        $tag1 = Tags::all()->where('id', $id);
        $news = News::all();
        
        // return dd($tag1);
        return view('editTag', compact('cate1', 'tag1', 'cate'));
    }
    
    //move to create page
    public function create(){
        $cate1 = Categories::all('id', 'cate_name');
        $tag1 = Tags::all();
        // return dd($cate1);
        return view('createTag', compact('cate1', 'tag1'));
    }
}
    