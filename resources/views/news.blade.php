@extends('layouts.app')
@section('content')
{{-- content homepage --}}
<div class="container-fluid bd-content">
    <div class="row">
        {{-- category --}}
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    News Category
                </div>
                <div class="card-body">
                    dfgdf
                </div>
            </div>
        </div>
        {{-- end category --}}
        
        {{-- news --}}
        <div class="col">
            {{-- slider --}}
            <div class="card">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>                    
            </div>
            {{-- end slider --}}
            <br>
            {{-- latest news --}}
            <div class="card">
                <div class="card-header">
                    Latest news
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            Latest
                        </div>
                        <div class="col">
                            second latest
                        </div>
                    </div>
                </div>
            </div>
            {{-- end latest news --}}
            <hr>
            {{-- random news --}}
            <div class="card">
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end random news --}}
            <br>

            {{-- random category --}} 
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h2>Cate 1</h2>
                        image news 1 <br>
                        title news 1
                        <hr>
                        title news 2
                        <hr>
                        title news 3
                    </div> 
                </div>
                <div class="col">
                    <div class="card">
                        <h2>Cate 1</h2>
                        image news 1 <br>
                        title news 1
                        <hr>
                        title news 2
                        <hr>
                        title news 3
                    </div> 
                </div>
                <div class="col">
                    <div class="card">
                        <h2>Cate 1</h2>
                        image news 1 <br>
                        title news 1
                        <hr>
                        title news 2
                        <hr>
                        title news 3
                    </div> 
                </div>
            </div>
            {{-- end random category --}}
        </div>
        {{-- end news --}}
    </div>
</div>
{{-- end content homepage --}}
@endsection