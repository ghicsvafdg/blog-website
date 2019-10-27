@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin:auto">EDIT CATEGORY</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-1">
            
        </div>
        
        <div class="col-10">
                @foreach($cate as $cate)
        <form action="{{route('update-category', $cate->id)}}" method="post">
                    @method('patch')
                    
                    <div class="card-body login">
                        <div class="form-group">
                            <label  class="placeholder"><b>Category name:</b></label>
                        
                        <input  type="text" name="cate_name"   class="form-control " display=false required value="{{$cate->cate_name}}">
                        
                    </div>
                    
                    <a href="{{route('category')}}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">
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