@extends('layouts.app')
@section('content')
<div class="container-fluid bd-content">
    <div class="row">
        <h2 style="margin:auto">MANAGE TAG</h2>
    </div>
    <hr>
    
    <div class="col-4">
        <div class="row">
            <a href="{{route('create-tag')}}" class="btn btn-success btn-small">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                Add new tag
            </a>
        </div>
        <hr>
        <div class="card">
            @foreach($tag1 as $tag )
            
            <div class="col">
                <div class="row">
                    <div class="col-lg-7 row">
                        <div class="col-12">
                            
                            <a href=""> {{$tag->tag_name}} </a>                  
                        </div>
                        
                        
                    </div>
                    <div class="col row">
                    <form action="{{route('edit-tags', $tag->id)}}" >
                            <button type="hidden" class="btn btn-primary">
                                Edit
                            </button> 
                        </form>
                    </div>
                    
                    <div class="col row">
                        <form action="{{route('delete-tag', $tag->id)}}" method ="post" onclick="return confirm('Are you sure to delete?')">
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
    
    
    
    
    {{-- <div class="col-4, witdh: 220px" style="margin-right: 20px">
        
    </div> --}}
</div>
{{-- </div> --}}
@endsection