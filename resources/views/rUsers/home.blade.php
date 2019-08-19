@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    
                    @endif
                    <h1>Welcome : {{ Auth::user()->name }}</h1>
                    <div class="card-header"><a href="/posts" class="btn btn-primary"><h1> Posts</h1></a></div>
                    <div class="card-header"><a href="/jobs" class="btn btn-primary"> <h1> Jobs</h1></a></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
