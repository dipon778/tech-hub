@extends('layouts.app')

@section('content')

    <h1 style="padding-left:40px">Jobs</h1>       
    @if(count($jlists)>0)
        @foreach ($jlists as $jlist)
            <div class="well">
                <div class="row">
                        <div class="col-md-4 col-sm-4">
                                
                        </div>

                        <div class="col-md-8 col-sm-8">
                                <img style="width:50%" src="/image/{{$jlist->cover_image}}">
                            <h3><a href="/jobs/{{$jlist->id}}">{{$jlist->title}}</a></h3>
                            {{-- <h6>{!!$jlist->body!!}</h6> --}}
                            <small>posts created at {{$jlist->created_at->diffForHumans()}} by {{ Auth::user()->name }}</small>
                        </div>
                </div>
                <br> 
            </div>
        @endforeach
        
    @else
        <p>No Posts found</p>
    @endif
@endsection