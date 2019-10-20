@extends('layouts.app')
@section('content')
<div class="container-fluid">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                
            </div>
            <div class="col-8">
                <h5>>>Category</h5>
                <h1>Title of the news</h1>
                <b>Author, data created</b><br>
                tag1, tag2, tag3
                <hr>
                <strong>short desc</strong>
                <p>
                    <pre>
                        content here
                        content here
                        content here
                        content here
                        
                        content here
                        content here
                        content here
                        content here
                        
                        content here
                        content here
                        
                        content here
                        content here
                        content here
                        content herecontent herecontent here
                        content here
                        content here
                        content here
                        content here
                        content here
                        content here
                        
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
                    <table>
                        <tr>
                            <td><b>user 1</b>:</td>
                            <td><i>date time</i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>this post is nice</td>
                        </tr>
                        <tr>
                            <td><b>user 1</b>:</td>
                            <td><i>date time</i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>this post is nice</td>
                        </tr>
                        <tr>
                            <td><b>user 1</b>:</td>
                            <td><i>date time</i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>this post is nice</td>
                        </tr>
                        <tr>
                            <td><b>user 1</b>:</td>
                            <td><i>date time</i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>this post is nice</td>
                        </tr>
                        <tr>
                            <td><b>user 1</b>:</td>
                            <td><i>date time</i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>this post is nice</td>
                        </tr>
                    </table>
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