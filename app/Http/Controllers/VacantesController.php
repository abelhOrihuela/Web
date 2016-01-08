<?php

namespace Wtc\Http\Controllers;

use Illuminate\Http\Request;
use Wtc\Http\Requests;
use Wtc\Http\Controllers\Controller;
use Wtc\Vacancy;

class VacantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies=Vacancy::orderBy('id', 'DESC')->get();

        return view('vacantes', ['vacancies' => $vacancies]);
    }

    public function newvacancy(){
      return view('newvacancy');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


      $vacancy= new Vacancy();
      $vacancy->title=$request->title;
      $vacancy->city=$request->city;
      $vacancy->area=$request->area;
      $vacancy->body=$request->description;
      $vacancy->other=$request->other;
      $vacancy->other=$request->salary;
      $vacancy->save();

      return redirect()->route('vacantes_index_path');
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
        $vacancy =Vacancy::findOrFail($id);
        return view('vacante', ['vacancy' => $vacancy ]);
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
