<?php

/* RUTAS CON AUTENTICACION USER */

Route::group( ['middleware' => 'auth'], function(){

    Route::get('Perfil', [
        'uses' => 'CurriculumController@index',
        'as'   => 'curriculum_index_path'
    ]);

    Route::post('Perfil',[
      'uses' => 'CurriculumController@edit',
      'as'  => 'curriculum_edit_path'
    ]);

    Route::post('Perfil',[
      'uses' => 'CurriculumController@edit',
      'as'  => 'curriculum_edit_path'
    ]);


});

/*  RUTAS ACCESO SOLO PARA ADMINISTRADORES */
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

  Route::get('Item', [
    'uses' => 'ItemsController@index',
    'as'   => 'item_index_path'
  ]);

  Route::post('Item', [
    'uses' => 'ItemsController@create',
    'as'   => 'item_create_path'
  ]);

  Route::post('Blog/create', [
    'uses' => 'PostsController@create',
    'as'   => 'blog_create_path'
  ]);

});

/*RUTAS USUARIOS MORTALES */
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

Route::get('Contacto', [
  'uses' => 'ContactoController@index',
  'as'   => 'contacto_index_path'
]);

Route::post('Contacto', [
  'uses' => 'ContactoController@store',
  'as'   => 'contacto_store_path'
]);

Route::get('Auth/login', [
  'uses' => 'AuthController@index',
  'as'   => 'auth_show_path'
]);

Route::post('Auth/login', [
    'uses' => 'AuthController@store',
    'as'   => 'auth_store_path'
]);

Route::get('Auth/logout', [
    'uses' => 'AuthController@destroy',
    'as'   => 'auth_destroy_path'
]);

Route::post('Auth/create', [
    'uses' => 'AuthController@create',
    'as'   => 'auth_create_path'
]);

Route::get('Thanks', function () {
    return view('thanks');
});
