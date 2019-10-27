@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin:auto">EDIT DETAIL OF BLOG</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-1">
            
        </div>
        
        <div class="col-10">
            @foreach($news as $new)
            <form action="{{route('update', $new->id)}}" method="post">
                @method('patch')
                
                <div class="card-body login">
                    <div class="form-group">
                        <label  class="placeholder"><b>Title:</b></label>
                        
                        <input  type="text" name="title"   class="form-control " display=false required value="{{$new->title}}">
                        
                    </div>
                    
                    <div class="form-group">
                        <label for=""><b>Category:</b></label>
                        <select class=" custom-select" name ="cate_id">
                            @foreach($cate1 as $cate)
                            <option value="{{$cate->id}}">{{$cate->cate_name}}</option>
                            
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for=""><b>Tag:</b></label>
                        <select class=" custom-select" name ="tag_id">
                            @foreach ($tag1 as $tag)
                            <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label  class="placeholder"><b>Short-intro:</b></label>
                        @foreach($news as $new)
                        <textarea name="short_intro" required class="form-control" value="">{{$new->short_intro}}</textarea>
                        @endforeach
                        {{-- <br> --}}
                    </div>
                    
                    <div class="form-group">
                        <label  class="placeholder"><b>Content:</b></label>
                        <textarea name="content" required class="form-control" placeholder="Content of this blog">{{$new->content}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label  class="placeholder"><b>Author:</b></label>
                        <input  type="text" name="author"  placeholder="Name of author" class="form-control " display=false required value="{{$new->author}}">
                    </div>
                    
                    <a href="{{route('news')}}" class="btn btn-danger">Cancel</a>
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