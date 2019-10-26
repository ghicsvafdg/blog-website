@extends('layouts.app')
@section('content')
<div class="container-fluid">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                
            </div>
            <div class="col-10">
                {{-- <h5>{{$category->cate_name}}</h5> --}}
                <h1>{{$news->title}}</h1>
                <b>Author: </b>{{$news->author}}
                <p></p> 
                <b>Posted on:</b> {{$news->created_at}}
                <p></p>
                {{-- <h2>Tag: </h2> --}}
                Tag:
                @foreach($tag1 as $tag)
                <a href="{{route('news-tags', $tag->id)}}"> #{{$tag->tag_name}}</a>
                @endforeach
                <h6>Category: <a href="{{route('news-categories', $tag->id)}}">{{$categories}}</a> </h6>
                <hr>
                <h5><strong>{{$news->short_intro}}</strong></h5>
                <br>
                <p>
                    {{$news->content}}
                </p>
                <p style="text-align:center"><b>END OF BLOG (^-^) </b></p>
                <hr>
                <br>
                {{-- <hr> --}}
                {{-- comment --}}
                <div>
                    
                    <form action="">
                        <h6>Enter username:</h6>
                        <input type="text" placeholder="enter name or email first" name="info"  class="form-control" required>
                        <br>
                        <h6>Type your comment here:</h6>
                        <textarea name="comment" required class="form-control" placeholder="Comment here"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">
                            comment
                        </button>
                    </form>
                    <br>
                    <h4><b> Comment: </b></h4>
                    @foreach($comment as $comment)
                    <table>
                        
                        <tr>
                            <td><b>{{$comment->username}}:&nbsp; </b></td>
                            <td><i>{{$comment->created_at}}</i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{$comment->content}}</td>
                        </tr>
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
                                {{-- {{$relate->title}} --}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                {{-- end Related news --}}
            </div>
            {{-- <div class="col">
                <h2>
                    latest news
                </h2>
                <div class="row">
                    <div class="col-12">
                        image news
                    </div>
                    <div class="col-12">
                        title news
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        image news
                    </div>
                    <div class="col-12">
                        title news
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        image news
                    </div>
                    <div class="col-12">
                        title news
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        image news
                    </div>
                    <div class="col-12">
                        title news
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        image news
                    </div>
                    <div class="col-12">
                        title news
                    </div>
                </div>
            </div> --}}
        </div>
        
        
    </div>
    
    
</div>
@endsection