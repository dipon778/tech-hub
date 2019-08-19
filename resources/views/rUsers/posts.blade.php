
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    <a href="posts/createPost">Create Post</a>
    <div class="row justify-content-center">
        
        <div class="col-md-8">

            {{-- search bar --}}

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search posts" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-dark" type="button">Search</button>
                </div>
            </div>

            {{-- /// Foreach start ///  --}}
            @foreach($std as $value)            
            <div class="card">
                <div class="card-header" style="color:brown; font-weight: bold; font-size: 20px; ">Query :   {{$value['query']}}   (created :{{$value['created_at']->diffForHumans() }})</div>
                
                <div style="padding-left:15px;">
                     {{$value['like']}} :<a href=""> like</a> &nbsp; &nbsp;
                     <a href="{{route('posts.showPost', $value['id'])}}"> View details</a>
                    </div>
                 
                                  

                    <div class="card-body">                        
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                                {{-- show comment --}}
                        <div style=" padding-left:20px;">comment:  {{$value['comment']}}</div>
                    </div>       
            </div>
            @endforeach 
            
        </div>
    </div>
</div>
@endsection



