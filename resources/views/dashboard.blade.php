@extends('layouts.default')


@section('content-wrapper')
<div class="contain__def center">
  <h1 class="title__pages font-blue center relaway">Panel</h1>
  <section>
    <section class="menu__dashboard">
      <li><a href="{{ route('blog_new_path') }}">Nuevo articulo</a></li>
      <li><a href="{{ route('vacantes_new_path') }}">Nueva vacante</a></li>
    </section>
  </section>
</div>
@stop
