<?php

namespace Wtc\Http\Controllers;

use Illuminate\Http\Request;
use Wtc\Http\Requests;
use Wtc\Http\Controllers\Controller;
use Wtc\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::orderBy('id', 'DESC')->get();

        return view('blog', ['posts' => $posts]);

    }

    public function newpost()
    {
      return view('newpost');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {
      $file = $request->file('img');
      $storePath=public_path().'/images/';
      $fileName=$file->getClientOriginalName();
      $load=$file->move($storePath, $fileName);

      if($load){
        $post= new Post();
        $post->title=$request->title;
        $post->branch=$request->branch;
        $post->description=$request->description;
        $post->img=$fileName;
        $post->intro_post=$request->intro_post;
        $post->body_post=$request->body_post;
        $post->conclusion_post=$request->conclusion_post;
        $post->source=$request->source;
        $post->author_id=$request->author_id;
        $post->save();

        return redirect()->route('blog_index_path');
      }else{
        return "No Cargada";
      }




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post =Post::findOrFail($id);
      return view('post', ['post' => $post ]);
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
}
