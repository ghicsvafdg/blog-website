@extends('layouts.app')
@section('content')
<div class="container-fluid">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                
            </div>
            <div class="col-8">
                {{-- <h5>{{$category->cate_name}}</h5> --}}
                <h1>{{$news->title}}</h1>
                <b>{{$news->author}}, {{$news->created_at}}</b>
                <br>
                {{$news->tag}}
                <hr>
                <strong>{{$news->short_intro}}</strong>
                <p>
                    <pre>
                        {{$news->content}}
                        
                    </pre>    
                </p>
                <hr>
                {{-- comment --}}
                <div>
                    <h3>Comment</h3>
                    <form action="">
                        <input type="text" placeholder="enter name or email first" name="info"  class="form-control" required>
                        <textarea name="comment" required class="form-control"></textarea>
                        <button type="submit" class="btn btn-primary">
                            comment
                        </button>
                    </form>
                    <br>
                    @foreach($comment as $comment)
                    <table>
                        
                        <tr>
                            <td><b>{{$comment->username}}</b>:</td>
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
                <h3>Related news</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                image news
                            </div>
                            <div class="col-12">
                                title news
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                image news
                            </div>
                            <div class="col-12">
                                title news
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                image news
                            </div>
                            <div class="col-12">
                                title news
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                image news
                            </div>
                            <div class="col-12">
                                title news
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                image news
                            </div>
                            <div class="col-12">
                                title news
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                image news
                            </div>
                            <div class="col-12">
                                title news
                            </div>
                        </div>
                    </div>
                    
                </div>
                {{-- end Related news --}}
            </div>
            <div class="col">
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
            </div>
        </div>
        
        
    </div>
    
    
</div>
@endsection