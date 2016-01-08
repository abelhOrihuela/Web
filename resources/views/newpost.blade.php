@extends('layouts.default')


@section('content-wrapper')
<div class="contain__def center">
  <!--Contenido--------------------------------------->
<section class="contain__information center">
  <h2>Nuevo post</h2>
  <div class="flex__contain">
    <form class="pure-form" method="post" action="{{ route('blog_create_path') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form__title-input">
        <p>
          Titulo
        </p>
          <input type="text" name="title" placeholder="Titulo" class="field__input">
        </div>

        <div class="form__title-input">
        <p>
          Rama/Concepto
        </p>
          <input type="text" name="branch" placeholder="Titulo" class="field__input">
        </div>

        <div class="form__title-input">
        <p>
          Descripcion 140 Caracteres.
        </p>
          <input type="text" name="description" placeholder="Titulo" class="field__input">
        </div>

        <div class="form__img-input">
        <p>
          Imagen
        </p>
          <input type="file" name="img"  class="field__input">
        </div>
        <div class="form__text-input">
          <p>
            Introduccion
          </p>
          <textarea name="intro_post" class="intro__post" placeholder="Contenido" class="field__input"></textarea>
        </div>

        <div class="form__text-input">
          <p>
            Desarrollo
          </p>
          <textarea name="body_post" class="body__post" placeholder="Contenido" class="field__input"></textarea>
        </div>

        <div class="form__text-input">
          <p>
            Conclusion
          </p>
          <textarea name="conclusion_post"  placeholder="Contenido" class="field__input"></textarea>
        </div>

        <div class="form__text-input">
          <p>
            Fuente:
          </p>
          <textarea name="source" class="source__post" placeholder="Contenido" class="field__input"></textarea>
        </div>

        <input type="hidden" name="author_id" value="{{ $currentUser->id }}">
        <div class="form__text-input">
          <button type="submit" class="pure-button pure-button-primary">Guardar</button>
        </div>
    </form>
  </div>




</section>

@stop
</div>
