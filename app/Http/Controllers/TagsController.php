<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tags::all();
        return $tag;
        // return view ('news',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tags::create([
            'tag_name'=> $request->tag_name,
        ]);

        return Tags::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tags::find($id);
        return $tag;
        // return view ('detail',compact('news'));
    }

    public function listNews($id){
        // $tag = Tags::find($id);
        // $comment = $tag->comments;
        // return $comment;
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
        $tag = Tags::find($id);
        $tag->tag_name = $request->input('tag_name');
        $tag->save();
        return Tags::all();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return Tags::all();
    }
}
