<?php

namespace App\Http\Controllers;
use App\Post;
use Validator;
use Auth;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){

        $plist = Post::all();
        $plist = $plist->reverse();
    	return view('rUsers.posts', ['std'=> $plist]);

        
    }

  

    public function create()
    {
        
        return view('/rUsers/createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'query' => 'required',            
        ]);

        $id = Auth::id();
        $post = new Post;
    	$post->query = $request->input('query');
    	$post->user_id = $id;
    	//$user->password = $req->password;
    	$post->save();

        $plist = Post::all();
        $plist = $plist->reverse();
    	return redirect()->route('posts', ['std'=> $plist]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plist = Post::Find($id);
    	return view('rUsers.showPost', ['std'=> $plist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request){
        if($request->search){
            $searchs = Post::all()
            ->where('query','like','%'.$request->search.'%')
            ->get();

            if($searchs){
                foreach($searchs as $key =>$search){
                    echo $search-name;
                }
            }
        }

    }
}
