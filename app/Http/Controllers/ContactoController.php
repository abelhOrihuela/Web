<?php

namespace Wtc\Http\Controllers;

use Illuminate\Http\Request;
use Wtc\Http\Requests;
use Wtc\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Mail;
use Session;

class ContactoController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('contacto');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request){


    $rules =  array('captcha' => ['required', 'captcha']);
    $validator = Validator::make([
      'captcha' => Input::get('captcha')
    ],
    $rules,[ 'captcha' => 'Los caracteres no corresponden con los de la imagen.' ]);

    if ($validator->passes()) {

      Mail::send('mails.contacto', $request->all(),
      function($msj){
        $msj->subject('Correo de contacto');
        $msj->to('contacto@wtc-talent.com');
      });
      return redirect()->route('contacto_index_path');
    }else {
      return redirect()->route('contacto_index_path')->withErrors($validator);
    }
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
