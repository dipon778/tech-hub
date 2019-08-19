@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Posts</h1>
<a href="{{route('posts.createPosts')}}">Create Post</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- /// Foreach start ///  --}}
            @foreach($std as $value)
            <div class="card">
                <div class="card-header" style="color:blue; font-weight: bold;">Query : {{$value['id']}} . {{$value['query']}}   (created :{{$value['created_at']->diffForHumans()}}) <br> by : {{ Auth::user()->name }}
                <div>
                    <a href="{{route('profile.posts.edit', $value['id'])}}"class="btn btn-info">Edit query </a>
                    <a href="{{route('profile.posts.delete', $value['id'])}}" class="btn btn-info">   Delete query </a>
                 </div>
                </div> 
                                  

                    <div class="card-body">                        
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div style=" padding-left:10px;">comment:  {{$value['comment']}}</div> 
                    </div>       
            </div>
            @endforeach 
        </div>
    </div>
</div>
@endsection



