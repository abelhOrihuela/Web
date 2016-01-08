<?php

namespace Wtc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Wtc\Http\Requests;
use Wtc\Http\Controllers\Controller;
use Wtc\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $this->validate($request,[
            'name'     => 'required',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $user=new User();
        $user->name=$request->name." ".$request->first_name." ".$request->last_name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->remember_token= str_random(10);
        $user->save();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only(['email', 'password']))){
            return redirect()->route('auth_show_path')->withErrors('Validar usuario / password ');
        }
        return redirect()->route('home_index_path');
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
    public function destroy()
    {
        auth( )->logout();

        return redirect()->route('home_index_path');
    }
}
