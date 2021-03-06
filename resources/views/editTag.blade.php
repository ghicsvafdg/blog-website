@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin:auto">EDIT TAG</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-1">
            
        </div>
        
        <div class="col-10">
            @foreach($tag1 as $tag)
            <form action="{{route('update-tag', $tag->id)}}" method="post">
                @method('patch')
                
                <div class="card-body login">
                    <div class="form-group">
                        <label  class="placeholder"><b>Tag name:</b></label>
                        
                        <input  type="text" name="tag_name"   class="form-control " display=false required value="{{$tag->tag_name}}">
                        
                    </div>
                    
                <a href="{{route('tag')}}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to save the change?')">
                        Save change
                    </button> 
                </div>
            </form>
            @endforeach
        </div>
        
        <div class="col-1">
            
        </div>
    </div>
    
    
</div>
@endsection