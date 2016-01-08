@extends('layouts.default')
@section('content-wrapper')

<div class="contain__def center">
  <h1 class="title__pages font-blue center relaway">Vacantes</h1>
  <section class="contain__information center">



    @foreach( $vacancies as $vacancy )
      <div class="vacancy__item">

        <h2>{{ $vacancy->title }}</h2>
        <section class="section__flex">
          <div class="text__small">
            <section>Lugar:
              <p>
                {{ $vacancy->city }}
              </p>
            </section>

          </div>
          <div class="text__small">
            <section>Area:
              <p>
                {{ $vacancy->area }}
              </p>
            </section>

          </div>
          <div class="text__small">
            <section>Fecha publicacion :
              <p>
                {{ $vacancy->created_at }}
              </p>
            </section>

          </div>

        </section>

        <p>{{ $vacancy->description }}</p>


      <footer>
        <a class="btn-primary" href="{{ route('vacantes_show_path', $vacancy->id) }}" class="read__moore">Leer mas ...</a>
      </footer>
      </div>

      @endforeach

  </section>
  <br>
@stop
