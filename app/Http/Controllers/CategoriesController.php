<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CategoriesController extends Controller
{
    
    //show list of categories
    public function index()
    {
        $cate = Categories::all();
        return $cate;
        // return view ('news',compact('news'));
    }

    //create a new categories
    public function store(Request $request)
    {
        Categories::create([
            'cate_name'=> $request->cate_name,
        ]);

        return Categories::all();
    }

    //show detail of a categories
    public function show($id)
    {
        $cate = Categories::find($id);
        return $cate;
        // return view ('detail',compact('news'));
    }


    // show list news of a categories
    public function listNews($id){
        $cate = Categories::find($id)->news()->get();
        
        return $cate;
    }

   
    //update a categories
    public function update(Request $request, $id)
    {
        $cate = Categories::find($id);
        $cate->cate_name = $request->input('cate_name');
        $cate->save();
        return Categories::all();

    }

    // delete a categories
    public function destroy($id)
    {
        $cate = Categories::find($id);
        $cate->delete();
        return Categories::all();
    }
}
