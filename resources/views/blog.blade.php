@extends('layouts.default')
@section('content-wrapper')

<div class="contain__def center">
  <h1 class="title__pages font-blue center relaway">Blog</h1>
<section class="contain__information center flex">


    @foreach( $posts as $post )

      <div class="blog_item center">
        <img src="images/{{ $post->img }}" alt="" />
        <section>
          <h2 class="open-sans font-blue " >{{ $post->title }}</h2>

          <footer>
            <p class="font-gray center">{{ $post->description }}
            </p>
            <a class="btn-primary" href="{{ route('blog_show_path', $post->id) }}" class="read__moore">Leer mas ...</a>
          </footer>
        </section>




      </div>

      @endforeach
  </section>
@stop
