@extends('layouts.app')
@section('content')
<div class="container-fluid bd-content">
    <div class="row">
        <h2 style="margin:auto">AIW-BLOG</h2>
    </div>
    <hr>
    <div class="row">
        
        <div class="col-2, witdh: 220px" style="margin-left: 20px">
        </div>
        <div class="col ">
            <div class="card">
                @foreach($news as $new )
                
                <div class="col">
                    <div class="row">
                        <div class="col-lg-11 row">
                            <div class="col-12">
                                
                                <a href="{{route('detail-news', $new->id)}}"> {{$new->title}} </a>                  
                            </div>
                            
                            <div class="col-12">
                                {{$new->short_intro}}...  
                            </div>
                        </div>
                        <div class="col row">
                            <form action="{{route('edit', $new->id)}}" >
                                <button type="hidden" class="btn btn-primary">
                                    Edit
                                </button> 
                            </form>
                        </div>
                        <div class="col row">
                            <form action="{{route('delete', $new->id)}}" method="post" onclick="return confirm('Are you sure to delete?')">
                                @method('delete')
                                <button type="hidden" class="btn btn-primary">
                                    Delete
                                </button> 
                            </form>
                        </div>
                    </div>
                    
                    
                    <hr>
                </div>
                @endforeach
                
                <br>
                
                
            </div>
            
            
        </div>
        <div class="col-3, witdh: 220px" style="margin-right: 20px">
            
        </div>
    </div>
    @endsection