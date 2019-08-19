<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;


class Profilecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $id = Auth::id();
        $currentuser = User::find($id);
        return view('rUsers/profile',['usr'=> $currentuser]);
    }
    public function edit(){
        $id = Auth::id();
        $currentuser = User::find($id);
        return view('rUsers/editProfile',['usr'=> $currentuser]);
    }
    public function store(Request $data){
        $id = Auth::id();

        // Validator::make($data, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

        $user = User::find($id);
    	$user->name = $data->name;
    	$user->bio = $data->bio;
    	//$user->password = $req->password;
    	$user->save();

        $currentuser = User::find($id);
        return view('rUsers/profile',['usr'=> $currentuser]);
    }
    public function posts(){
        $id = Auth::id();
        $plist = Post::where('user_id',$id)->get();
        $plist = $plist->reverse();
    	return view('rUsers.ownPosts', ['std'=> $plist]);
    }
    
    public function postEdit($id){
        
        $plist = Post::Find($id);
    	return view('rUsers.editPost', ['std'=> $plist]);
    }


    public function postUpdate(Request $request,$id){
        $usr = Auth::id();
        $this->validate($request, [
            'query' => 'required',            
        ]);

        $post = Post::Find($id);
    	$post->query = $request->input('query');
    	$post->user_id = $usr;
    	//$user->password = $req->password;
    	$post->save();      


        
        $plist = Post::where('user_id',$usr)->get();
        $plist = $plist->reverse();
    	return view('rUsers.ownPosts', ['std'=> $plist]);
    }

    public function postShow($id){
        $plist = Post::Find($id);
        return view('rUsers.deletePost',['std'=> $plist]);
    }
    public function postDelete($id){

        $plist = Post::destroy($id); ///DDeleting data

        $usr = Auth::id();                                        ///
        $plist = Post::where('user_id',$usr)->get();             ///retriving  data from database 
    	return view('rUsers.ownPosts', ['std'=> $plist]);       /// via user id
    }

   
}
