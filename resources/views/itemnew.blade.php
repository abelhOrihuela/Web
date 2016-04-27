@extends('layouts.default')


@section('content-wrapper')

<h1>New item</h1>
    <div class="flex__contain">
      <form class="pure-form" method="post" action="{{ route('item_create_path') }}" enctype="multipart/form-data">
          {{ csrf_field() }}


          <div class="form__title-input">
            <p class="font-blue">
              Post
            </p>
            <select class="" name="post_id">
              @foreach( $posts as $post )
              <option value="{{ $post->id }}" >{{ $post->title }}</option>
              @endforeach
            </select>
          </div>

          <div class="form__title-input">
            <p class="font-blue">
              Numero / Inciso
            </p>
            <select class="" name="type__item">

              <option value="number__item" >Numero</option>
              <option value="letter__item" >Inciso Letra</option>

            </select>
          </div>

          <div class="form__title-input">
          <p class="font-blue">
            Contenido item
          </p>
            <input type="text" name="description" placeholder="Titulo" class="field__input">
          </div>
          <br>
          <div class="form__text-input">
            <button type="submit" class="pure-button pure-button-primary">Guardar</button>
          </div>
          </form>
@stop
