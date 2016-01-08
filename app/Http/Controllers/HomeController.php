<?php

namespace Wtc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Wtc\Http\Requests;
use Wtc\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terminos()
    {
        return view('terminos');
    }

    public function politicas()
    {
        return view('politicas');
    }

    public function dashboard(){
      return view('dashboard');
    }


}
