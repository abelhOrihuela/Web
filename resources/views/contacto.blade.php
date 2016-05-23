@extends('layouts.default')

@section('content-wrapper')
<div class="contain__def center">
  <h1 class="title__pages font-blue center relaway">Contactanos</h1>
  <section class="contain__information center">

    <div class="flex__contain">
      <div class="item_other">
        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3766.571286872808!2d-99.60345973557277!3d19.257507151247413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.257448699999998!2d-99.6015243!4m5!1s0x85cd8bb017e54a89%3A0xdbf569dc229a67bd!2sWorld+Talent+Consulting%2C+S.C.%2C+Calle+Vicente+Guerrero+141%2C+52140+Metepec%2C+M%C3%A9x.%2C+M%C3%A9xico!3m2!1d19.257592199999998!2d-99.60147459999999!5e0!3m2!1ses-419!2smx!4v1448650812545"   frameborder="0" style="border:0" allowfullscreen></iframe>
        <br>
        <p class="font-gray">
          Edo. de México, Metepec <br>
          <br>
          Vicente Guerrero Local 1 <br>
          Barrio San Mateo <br><br>
          Teléfono: +52 722 625 3449 <br>
          Teléfono: +52 722 625 3450 <br><br>
          C.P 52140 <br>
        </p>
      </div>
      
      <div class="item_other">
        <h3 class="font-blue relaway">Formulario de contacto</h3>
        <p class="font-gray">
          Tus comentarios y sugerencias son muy importantes para nosotros. Para recibir información acerca de su consulta por favor complete este formulario.
        </p>

        <p>
          @if($errors->has())
          <div class="alert alert-danger">
            <ul class="list-unstyled">
              @foreach($errors->all() as $error)
              <p class="font-gray">Error : {{ $error }}</p>
              @endforeach
            </ul>
          </div>
          @endif
        </p>
        <form class="pure-form pure-form-stacked" action="{{ route('contacto_store_path') }}" method="post">
          <fieldset>
            {{ csrf_field() }}
            <div class="pure-g">
              <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name" class="font-gray">Apellido paterno</label>
                <input name="first" class="field__input" type="text">
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name" class="font-gray">Apellido materno</label>
                <input name="last" class="field__input" type="text">
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name" class="font-gray">Nombre's</label>
                <input name="name" class="field__input" type="text">
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="email" class="font-gray">E-Mail</label>
                <input name="email" class="field__input" type="email" required>
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="city" class="font-gray">Ciudad</label>
                <input name="city" class="field__input" type="text">
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="state" class="font-gray">Mensaje</label>
                <textarea name="msg"class="field__input"></textarea>
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <img src="{{ Captcha::src() }}" alt="" />
                <label for="city" class="font-gray">Escribe los caracteres de la imagen</label>
                <input name="captcha" class="field__input" type="text">
              </div>
            </div>


            <button type="submit" class="pure-button pure-button-primary font-gray">Enviar</button>
          </fieldset>
        </form>
      </div>

    </div>
  </section>
</div>
@stop
