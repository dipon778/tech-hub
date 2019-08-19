<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
        <style>
                .card {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                  max-width: 500px;
                  margin: auto;
                  text-align: center;
                  font-family: arial;
                }
                
                .title {
                  color: grey;
                  font-size: 18px;
                }
                
                button {
                  border: none;
                  outline: 0;
                  display: inline-block;
                  padding: 8px;
                  color: white;
                  background-color:#DB6161;
                  text-align: center;
                  cursor: pointer;
                  width: 100%;
                  font-size: 18px;
                }
                
                a {
                  text-decoration: none;
                  font-size: 22px;
                  color: black;
                }
                
                button:hover, a:hover {
                  opacity: 0.7;
                }
                </style>

</body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white " style="background: #3D619B;">
                    <div class="card-header"> User Profile </div>                     

                <div class="card-body">
                        {!! Form::open([
                            'route' => 'profile'
                        ]) !!}
                    
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZGuhzeT7zvGQnOb8CaFb_ZLix7sERBYUovfDY7V2AVtWFew7f" alt="John" style="width:100%">
                        .
                        
                        <h1><input type="text" name="name" value="{{$usr->name}}"> </h1>
                        <p class="title"><input type="email" name="email" value="{{$usr->email}}"></p>
                        <p><textarea name="bio">{{$usr->bio}}</textarea></p>
                        <div style="margin: 24px 0;">
                            Started at: {{$usr->created_at}}                        
                        </div>
                        <p><button >Contact</button></p>
                        {{-- {!! Form::submit('Update Task') !!} --}}
                        <button type="submit">Update Profile </button>
                        {!! Form::close() !!}               
                    </form> 
                </div> 
            </div> 
        </div>
    </div>
</div>
@endsection
