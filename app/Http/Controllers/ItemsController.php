<?php

namespace Wtc\Http\Controllers;

use Illuminate\Http\Request;
use Wtc\Http\Requests;
use Wtc\Http\Controllers\Controller;

use Wtc\Post;
use Wtc\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
       $posts= Post::orderBy('id', 'DESC')->get();

       return view('itemnew', ['posts' => $posts]);
     }

     public function create(Request $request){

       $item= new Item();
       $item->post_id=(int)$request->post_id;
       $item->type__item=$request->type__item;
       $item->description=$request->description;
       $item->save();
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
        //
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
