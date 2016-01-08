<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group( ['middleware' => 'auth'], function(){
    Route::get('Perfil', [
        'uses' => 'CurriculumController@index',
        'as'   => 'curriculum_index_path'
    ]);


});


Route::group( ['middleware' => 'authtype'], function(){

  Route::get('Dashboard', [
    'uses' => 'HomeController@dashboard',
    'as'   => 'dashboard_index_path'
  ]);

  Route::get('Vacantes/new', [
    'uses' => 'VacantesController@newvacancy',
    'as'   => 'vacantes_new_path'
  ]);

  Route::get('Blog/new', [
    'uses' => 'PostsController@newpost',
    'as'   => 'blog_new_path'
  ]);

  Route::post('Vacantes/create', [
    'uses' => 'VacantesController@create',
    'as'   => 'vacantes_create_path'
  ]);

});


Route::get('/',[
    'uses'  => 'HomeController@index',
    'as'    => 'home_index_path'
]);

Route::get('Home/TerminosCondiciones',[
    'uses'  => 'HomeController@terminos',
    'as'    => 'terminos_index_path'
]);
Route::get('Home/PoliticasPrivacidad',[
    'uses'  => 'HomeController@politicas',
    'as'    => 'politicas_index_path'
]);

Route::get('Nosotros', [
  'uses' => 'NosotrosController@index',
  'as'   => 'nosotros_index_path'
]);



Route::get('Vacantes', [
  'uses' => 'VacantesController@index',
  'as'   => 'vacantes_index_path'
]);


Route::get('Vacantes/{id}', [
  'uses' => 'VacantesController@show',
  'as'   => 'vacantes_show_path'
]);

Route::get('Coaching', [
  'uses' => 'CoachingController@index',
  'as'   => 'coaching_index_path'
]);

Route::get('Ouplacement', [
  'uses' => 'CoachingController@outplacement',
  'as'   => 'outplacement_index_path'
]);

Route::get('DesarrolloOrganizacional', [
  'uses' => 'CoachingController@desarrollo',
  'as'   => 'desarrollo_index_path'
]);





Route::get('Blog', [
  'uses' => 'PostsController@index',
  'as'   => 'blog_index_path'
]);

Route::get('Blog/{id}', [
  'uses' => 'PostsController@show',
  'as'   => 'blog_show_path'
]);



Route::post('Blog/create', [
  'uses' => 'PostsController@create',
  'as'   => 'blog_create_path'
]);

Route::get('Contacto', [
  'uses' => 'ContactoController@index',
  'as'   => 'contacto_index_path'
]);

Route::post('Contacto', [
  'uses' => 'ContactoController@store',
  'as'   => 'contacto_store_path'
]);

Route::get('auth/login', [
  'uses' => 'AuthController@index',
  'as'   => 'auth_show_path'
]);

Route::post('auth/login', [
    'uses' => 'AuthController@store',
    'as'   => 'auth_store_path'
]);

Route::get('auth/logout', [
    'uses' => 'AuthController@destroy',
    'as'   => 'auth_destroy_path'
]);


Route::post('auth/create', [
    'uses' => 'AuthController@create',
    'as'   => 'auth_create_path'
]);
