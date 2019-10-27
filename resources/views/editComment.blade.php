@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin:auto">EDIT COMMENT</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-1">
            
        </div>
        
        <div class="col-10">
            @foreach($comment as $comment)
        <form action="{{route('update-comment', $comment->id)}}" method="post">
                @method('patch')
                
                <div class="card-body login">
                    <div class="form-group">
                        <label  class="placeholder"><b>Nickname:</b></label>
                        
                        <input  type="text" name="username"   class="form-control " display=false required value="{{$comment->username}}">
                        
                    </div>

                    <div class="form-group">
                            <label  class="placeholder"><b>Content:</b></label>
                            
                            <input  type="text" name="content"   class="form-control " display=false required value="{{$comment->content}}">
                            
                        </div>
                    
                    <a href="{{route('detail-news', $comment->news_id)}}" class="btn btn-danger">Cancel</a>
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