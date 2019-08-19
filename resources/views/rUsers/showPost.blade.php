@extends('layouts.app')

@section('content')
<h1 style="padding-left:40px;">Post</h1>



<div class="container">
    <div style=""><img src="https://mycoverpoint.com/wp-content/uploads/eat-sleep-blog-facebook-timeline-cover.jpg"></div>
    <br> <br><br>
    
    <h2 style="color:blue"> #  {{$std->query}} </h2>
    <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="10"></div>

</div>
@endsection



