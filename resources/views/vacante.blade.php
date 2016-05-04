@extends('layouts.default')
@section('content-wrapper')

<div class="contain__def center">
  <h1 class="title__pages font-blue center relaway">Vacantes</h1>
  <section class="contain__information center">
    @if( $currentUser)
      @if( $currentUser-> type == 1)
        <div class="">
          <h2><a href="{{ route('vacantes_new_path') }}">Agregar vacante</a></h2>

        </div>
      @endif
    @endif



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

        <p><strong>Descripcion : </strong>{{ $vacancy->description }}</p>


      <footer>

        <p><strong>Otros : </strong>{{ $vacancy->other }}</p>
      </footer>

      Mandanos tu CV: contacto@wtc-talent.com

      <div class="social__icons">

      <section>
             <div class="fb-share-button" data-href="http://www.wtc-talent.worldtalentconsulting.com/Blog/15" data-layout="button"></div>

      </section>


      <section>
	<a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="WorldTalentCons">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </section>

    </div>
      </div>




  </section>
  <br>
@stop
