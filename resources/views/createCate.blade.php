@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin:auto">CREATE NEW CATEGORY</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-1">
            
        </div>
        <div class="col-10">
            <form action="{{route('create-new-category')}}" method="post">
                <div class="card-body login">
                    <div class="form-group">
                        <label  class="placeholder"><b>Name of Category:</b></label>
                        <input  type="text" name="cate_name"  placeholder="Name of this category" class="form-control " required value="">
                    </div>
                    <a href="{{route('category')}}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Add new category
                    </button> 
                </div>
            </form>
        </div>
        
        <div class="col-1">
            
        </div>
    </div>
    
    
</div>
@endsection