@extends('layouts.app')

@section('content')

    <h1 style="padding-left:40px">Job</h1>       
    
        
            <div class="well">
                <div class="row">
                        <div class="col-md-2 col-sm-2">  </div>

                        <div class="col-md-8 col-sm-8">
                                <img style="width:50%" src="/image/{{$jlist->cover_image}}"> 
                                <br>
                            <h3 style="color:royalblue"># {{$jlist->title}}</h3> <br>
                            <h6>{!!$jlist->body!!}</h6>
                            <small>posts created at {{$jlist->created_at->diffForHumans()}} by {{ Auth::user()->name }}</small> <br>

                            <button type="button" class="btn btn-primary btn-lg ">Apply</button>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            
                        
                        </div>
                </div>
                <br> 
            </div>
@endsection