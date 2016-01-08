<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/wtc.css')}}">
  </head>
  <body>
    <h1 class="font-gray relaway">Mensaje de contacto.</h1>

         http://www.wtc-talent.worldtalentconsulting.com/
       </p>
    <div class="">
      <h2>Datos:</h2>
      <p class="font-gray">
        <strong>Nombre : </strong>
        {{ $name}}
        {{ $first }}
        {{ $last }}
      </p>

      <p class="font-gray">
        <strong>Email: </strong>
        {{ $email }}
      </p>

      <p class="font-gray">
        <strong>Ciudad: </strong>
        {{ $city }}
      </p>

      <p class="font-gray">
        <strong>Mensaje: </strong>
        {{ $msg }}
      </p>

    </div>
  </body>
</html>
