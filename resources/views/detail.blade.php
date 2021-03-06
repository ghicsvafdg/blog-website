@extends('layouts.app')
@section('content')
<div class="container-fluid">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-10">
                <h1>{{$news->title}}</h1>
                <b>Author: </b>{{$news->author}}
                <p>
                </p> 
                <b>Posted on:</b> {{$news->created_at}}
                <p>
                </p>
                
                <hr>
                <h5><strong>{{$news->short_intro}}</strong></h5>
                <br>
                <p>
                    {!!$news->content!!}
                </p>
                
                <p style="text-align:center"><b>END OF BLOG (^-^) </b>
                </p>
                <hr>
                <br>
                
                <div>
                    <form action="{{route('create-comment')}}" method="post">
                        
                        
                        <div class="card-body login">
                            <div class="form-group">
                                <label  class="placeholder"><b>News ID:</b></label>
                                <input  type="text" name="news_id"  placeholder="enter nickname" class="form-control " display=false required value="{{$news->id}}" readonly >
                            </div>
                            <div class="form-group">
                                <label  class="placeholder"><b>Nickname:</b></label>
                                <input  type="text" name="username"  placeholder="enter nickname" class="form-control " required >
                            </div>
                            <div class="form-group">
                                <label  class="placeholder"><b>Type comment here:</b></label>
                                <textarea name="content" required class="form-control" placeholder="Comment here"></textarea>
                                <br>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                Comment
                            </button> 
                        </div>
                    </form>
                    <br>
                    <h4><b> Comment: </b></h4>
                    @foreach($comment as $comment)
                    <table>
                        <div class="row">
                            <tr>
                                <td><b>{{$comment->username}}:&nbsp; </b></td>
                                <td><i>{{$comment->created_at}}</i></td>
                                <td>
                                    <form style="margin-left: 0px" action="{{route('edit-comment', $comment->id)}}" method="get">
                                        {{-- @method('delete') --}}
                                        <button type="hidden" class="btn btn-primary btn-sm">
                                            Edit
                                        </button> 
                                    </form>
                                </td>
                                <td>
                                    <form style="margin-left: 10px" action="{{route('delete-comment', $comment->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
                                        @method('delete')
                                        <button type="hidden" class="btn btn-primary btn-sm">
                                            Delete
                                        </button> 
                                    </form>
                                </td>
                                
                            </tr>
                            <tr>
                                <td></td>
                                <td>{{$comment->content}}</td>
                                
                            </tr>
                            
                        </div> 
                        
                        {{-- <div class="row" >
                            <tr>
                                
                            </tr>
                            
                        </div> --}}
                        <hr>
                    </table>
                    @endforeach
                </div>
                {{-- end comment --}}
                <hr>
                {{-- Related news --}}
                <h3> <b> Related news</b></h3>
                
                <div class="row">
                    <div class="col-10">
                        
                        <div class="row">
                            @foreach($relate_news as $relate)
                            <div class="col-12">
                                <a href="{{route('detail-news', $relate->id)}}">{{$relate->title}}</a> 
                            </div>
                            <div class="col-12">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                {{-- end Related news --}}
            </div>
        </div>
        
        
    </div>
    
    
</div>
@endsection
