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
                  padding: 2px;
                  color: white;
                  background-color:#DB6161;
                  text-align: center;
                  cursor: pointer;
                  width: 100%;
                  height: 40px;
                  font-size: 22px;
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
<div style="float:left; padding-left:15px;">
<a href="/profile/posts">My Posts</a> <br>
<a href="#">My Comments</a>
</div>
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <div class="card text-white " style="background: #3D619B;">
                    <div class="card-header"> User Profile </div>                     

                <div class="card-body">
                    <img src="https://media.idownloadblog.com/wp-content/uploads/2019/03/WWDC-2019-Wallpaper-AR72014-desktop-v1.png" alt="John" style="width:100%">
                    <h1>{{$usr->name}}</h1>
                    <p class="title">{{$usr->email}}</p>
                    <p>{{$usr->bio}}</p>
                    <div style="margin: 24px 0;">
                        Started at: {{$usr->created_at}}                        
                    </div>
                    <p><button>Contact</button></p>                    
                    <p><button><a href="/profile/edit" style="color:aliceblue">Edit Profile</a></button></p>                  
                </div>  
            </div> 
        </div>
    </div>
</div>
@endsection
