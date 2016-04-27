@extends('layouts.default')
@section('content-wrapper')
<div class="contain__def center">

  <div class="profile center">
    <img src="img/member.png" alt="Agrega una foto" />
    <h1 class="title__pages font-blue center relaway">{{ $user->name }}</h1>

  </div>

  <form class="" action="{{ route('curriculum_edit_path') }}" method="post">
    {{ csrf_field() }}
  <div class="section__cv center">
    <h2 class="center font-gray relaway">Informacion personal </h2>



    <section class="form__cv">
      <div class="field_cv">
        <label for="status-marital">Estado Civil</label>
        <select class="" name="status_marital" value=" {{ $user->curriculum->id }}">
          <option value="casado(a)">Casado(a)</option>
          <option value="soltero(a)">Soltero(a)</option>
          <option value="divorciado(a)">Divorciado(a)</option>
          <option value="union_libre">Union libre</option>
          <option value="viudo(a)">Viudo(a)</option>
        </select>
      </div>

      <div class="field_cv">
        <label for="generous">Genero</label>
        <select class="" name="generous">
          <option value="masculino">masculino</option>
          <option value="femenino">femenino</option>
          <option value="sin-especificar">Sin especificar</option>
        </select>
      </div>

      <div class="field_cv">
        <label for="birthday">Fecha de nacimiento</label>
        <input type="date" name="birthday" value="">
      </div>

    </section>


    <section class="form__cv">

      <div class="field_cv">
        <label for="usrcel">Telefono</label>
        <input type="tel" name="usrcel" value="">
      </div>

      <div class="field_cv">
        <label for="usrtel">Celular</label>
        <input type="tel" name="usrtel" value="">
      </div>

    </section>


  </div>

<!--///////////////////////////////////////////////////////-->


<div class="section__cv center">
  <h2 class="center font-gray relaway">Informacion profesional</h2>

  <section class="form__cv">
    <div class="field_cv">
      <label for="profession">Formacion/ Titulo profesional</label>
      <input type="text" name="profession" value="">
    </div>

    <div class="field_cv">
      <label for="level_education">Nivel de educacion</label>
      <input type="text" name="level_education" value="">
    </div>

    <div class="field_cv">
      <label for="degree">Grado</label>
      <select class="" name="degree">
        <option value="option">Titulado</option>
        <option value="option">No Titulado</option>
        <option value="option">En proceso</option>
      </select>
    </div>

  </section>


  <section class="form__cv">

    <div class="field_cv">
      <label for="institution">Nombre de la institucion</label>
      <input type="text" name="institution" value="">
    </div>

    <div class="field_cv">
      <label for="area">Area</label>
      <input type="text" name="area" value="">
    </div>

  </section>


</div>


<!--///////////////////////////////////////////////////////-->


<div class="section__cv center">
  <h2 class="center font-gray relaway">Experiencia profesional</h2>
  <h3 class="center font-blue relaway">Empleo actual/anterior</h3>
  <section class="form__cv">
    <div class="field_cv">
      <label for="organizacion1">Nombre de la organizacion</label>
      <input type="text" name="organizacion1" value="">
    </div>



    <div class="field_cv">
      <label for="city1">Ciudad</label>
      <input type="text" name="city1" value="">
    </div>

  </section>


  <section class="form__cv">

    <div class="field_cv">
      <label for="place1">Puesto ocupado</label>
      <input type="text" name="place1" value="">
    </div>

    <div class="field_cv">
      <label for="date_work1">De : </label>
      <input type="date" name="date_work1" value="">
    </div>

    <div class="field_cv">
      <label for="date_work1-2">A :</label>
      <input type="date" name="date_work1_2" value="">
    </div>

  </section>

  <section class="form__cv">

    <div class="field_cv">
      <label for="boss1">Jefe inmediato</label>
      <input type="tel" name="boss1" value="">
    </div>

    <div class="field_cv">
      <label for="orgtel1">Tel. Organizacion</label>
      <input type="tel" name="orgtel1" value="">
    </div>
  </section>




  <h3 class="center font-blue relaway">Empleo anterior</h3>

  <section class="form__cv">
    <div class="field_cv">
      <label for="organizacion2">Nombre de la organizacion</label>
      <input type="text" name="organizacion2" value="">
    </div>



    <div class="field_cv">
      <label for="city2">Ciudad</label>
      <input type="text" name="city2" value="">
    </div>

  </section>


  <section class="form__cv">

    <div class="field_cv">
      <label for="place2">Puesto ocupado</label>
      <input type="text" name="place2" value="">
    </div>

    <div class="field_cv">
      <label for="date_work2">De : </label>
      <input type="date" name="date_work2" value="">
    </div>

    <div class="field_cv">
      <label for="date_work2-2">A :</label>
      <input type="date" name="date_work2_2" value="">
    </div>

  </section>

  <section class="form__cv">

    <div class="field_cv">
      <label for="boss2">Jefe inmediato</label>
      <input type="tel" name="boss2" value="">
    </div>

    <div class="field_cv">
      <label for="orgtel2">Tel. Organizacion</label>
      <input type="tel" name="orgtel2" value="">
    </div>

  </section>

  <div class="pure-u-1 pure-u-md-1-3">
    <button type="submit" class="pure-button pure-button-primary font-gray">Enviar</button>
  </div>
</div>
</form>
  <br>
</div>

@stop
