<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Categories::all();
        return $cate;
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
        Categories::create([
            'cate_name'=> $request->cate_name,
        ]);

        return Categories::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cate = Categories::find($id);
        return $cate;
        // return view ('detail',compact('news'));
    }

    public function listNews($id){
        $cate = Categories::find($id);
        $comment = $cate->comments;
        return $comment;
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
        $cate = Categories::find($id);
        $cate->cate_name = $request->input('cate_name');
        $cate->save();
        return Categories::all();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Categories::find($id);
        $cate->delete();
        return Categories::all();
    }
}
