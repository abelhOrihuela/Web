@extends('layouts.default')
@section('content-wrapper')



<div class="contain__def center">
  <h1 class="title__pages font-blue center relaway">Agregar Vacante</h1>
<section class="contain__information center">







      <section class="desc__fact">
          <form class="pure-form" method="post" action="{{ route('vacantes_create_path') }}">
              {{ csrf_field() }}

              <div class="pure-g">
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="first-name" class="font-gray">Titulo</label>
                    <input name="title" class="field__input" type="text">
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="first-name" class="font-gray">Lugar</label>
                    <input name="city" class="field__input" type="text">
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="first-name" class="font-gray">Area</label>
                    <input name="area" class="field__input" type="text">
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="state" class="font-gray">Descripcion</label>
                    <textarea name="description"class="field__input"></textarea>
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="state" class="font-gray">Otros</label>
                    <textarea name="other"class="field__input"></textarea>
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="first-name" class="font-gray">Salario</label>
                    <input name="salary" class="field__input" type="number">
                </div>

                <button type="submit" class="pure-button pure-button-primary font-gray">Enviar</button>


              </div>
          </form>
      </section>
    </section>
@stop
</div>














@extends('layouts.default')
@section('content-wrapper')


    @stop
