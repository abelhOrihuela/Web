
@extends('layouts.default')

@section('content-wrapper')
<div class="contain__def center">
<section class="contain__information center">
  <section class="contain__information center">
    <h1 class="font-blue relaway title_post">{{ $post->title}}</h1>

      <h3 class="font-gray subtitle open-sans">Tema : {{ $post->branch }} por : {{ $post->author->name}}</h3>

    <article class="item__text-img flex">


      <img  src="/images/{{ $post->img }}" alt="" class="center" />
      <p class="font-gray relaway center">

          {{ $post->intro_post }}

    </article>
    <div class="contain__information center margin">
      <p class="font-gray relaway just__text">
        {{ $post->body_post }}
      </p>
    </div>
    <div>
      @foreach( $post->items as $item )
        <p class="font-gray relaway just__text {{ $item->type__item }}">
          {{ $item->description }}
        </p>
      @endforeach
    </div>
    <div class="">
      <p class="font-gray just__text ">
        {{ $post->conclusion_post }}
      </p>
      <p class="font-red just__text">
          Fuente(s): {{ $post->source }}
      </p>
    </div>

    <div class="social__icons">
      <!--
      <section>
        <img src="/img/facebook.png" alt="" width="50" height="50"/>
      </section>
      <section>
        <img src="/img/twitter.png" alt=""   width="50" height="50"/>

      </section>
    -->
    </div>
  </section>
</section>
</div>
@stop
