@extends('layouts.default')
@section('content-wrapper')

<div class="content-wrapper2">
  <section class="info__profile">
    <article class="username__profile">
    <h2>{{ $user->name }}</h2>
      <label for="">Email :<span>{{ $user->email}}</span></label>
    </article>
<h5>Informacion personal</h5>
    <article class="info__person">

      <div class="campo">
        <div class="title__campo">Sexo</div>
          <select class="" name="marital_status">
            <option>Hombre</option>
            <option>Mujer</option>
            <option>Sin especificar</option>
          </select>

      </div>
      <div class="campo">
        <div class="title__campo">Fecha de nacimiento:</div>
          <input type="date" name="name" value="">

      </div>

      <div class="campo">
        <div class="title__campo">Estado civil</div>
          <select class="" name="marital_status">
            <option>Soltero</option>
            <option>Casado</option>
            <option>Divorciado</option>
            <option>Separado</option>
            <option>Union libre</option>
            <option>Viudo</option>
          </select>

      </div>
      <div class="campo">
        <div class="title__campo">Lugar de nacimiento</div>
        <input type="text" name="name" value="" required>
      </div>

      <div class="campo">
        <div class="title__campo">Domicilio actual</div>
        <input type="text" name="name" value="" required>
      </div>

      <div class="campo">
        <div class="title__campo">Telefono(incluir lada)</div>
        <input type="tel" name="name" value="" >
      </div>

      <div class="campo">
        <div class="title__campo">Celular</div>
        <input type="tel" name="name" value="" >
      </div>

    </article>
    <h5>Informacion profesional</h5>
    <article class="info__person">

      <div class="campo">
        <div class="title__campo">Profesion /Titulo profesional</div>
        <input type="tetx" name="name" value="">
      </div>


      <div class="campo">
        <div class="title__campo">Grado maximo de estudios</div>
          <select class="" name="marital_status">
            <option>Preparatoria</option>
            <option>Carrera Técnica</option>
            <option>Universidad</option>
            <option>Diplomado</option>
            <option>Maestira</option>
            <option>Doctorado</option>
          </select>
      </div>


      <div class="campo">
        <div class="title__campo">Nombre de la institucion</div>
        <input type="tetx" name="name" value="">
      </div>

    </article>

    <article class="info__person">
      <div class="campo">
        <div class="title__campo">Español</div>
        <input type="tetx" name="name" value="">
      </div>

      <div class="campo">
        <div class="title__campo">Ingles</div>
        <input type="tetx" name="name" value="">
      </div>

      <div class="campo">
        <div class="title__campo">Frances</div>
        <input type="tetx" name="name" value="">
      </div>

      <div class="campo">
        <div class="title__campo">Aleman</div>
        <input type="tetx" name="name" value="">
      </div>

    </article>


    <h5>Ultimo empleo</h5>
    <article class="info__person">
      <div class="campo">
        <div class="title__campo">Nombre de la empresa</div>
        <input type="tetx" name="name" value="">
      </div>

      <div class="campo">
        <div class="title__campo">Jefe inmediato</div>
        <input type="tetx" name="name" value="">
      </div>

      <div class="campo">
        <div class="title__campo">Puesto dentro de la empresa</div>
        <input type="tetx" name="name" value="">
      </div>

      <div class="campo">
        <div class="title__campo">Antiguedad en el puesto</div>
        <input type="number" name="name" value="">
      </div>

    </article>

    <h5>Informacion adicional</h5>
    <article class="info__person">


    <div class="campo">
      <div class="title__campo">Cambio de residencia</div>
        <select class="" name="marital_status">
          <option>Si</option>
          <option>No</option>

        </select>

    </div>

      <div class="campo">
        <div class="title__campo">Sueldo minimo</div>
        <input type="tetx" name="name" value="">
      </div>

      <div class="campo">
        <div class="title__campo">Sueldo maximo</div>
        <input type="tetx" name="name" value="">
      </div>
    </article>
  </section>

</div>
@stop
