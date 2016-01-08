<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>World Talent Consulting</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/wtc.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href='https://fonts.googleapis.com/css?family=Cabin|Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Slabo+27px|Oswald|Lora|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

  <div class="header">
      <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <div class="menu__bar">
              <a href="#">☰ Menu</a>
            </div>
            <header>
              <nav id="nav">
                <div class="menu">
                  <ul>
                    <li><a href="{{ route('home_index_path')}}">Home</a></li>
                    <li><a href="{{ route('nosotros_index_path')}}">Nosotros</a></li>
                    <li><a href="{{ route('vacantes_index_path') }}">Vacantes</a></li>
                    <li><a href="{{ route('coaching_index_path') }}">Coaching</a></li>
                    <li><a href="{{ route('blog_index_path') }}">Blog</a></li>
                    <li><a href="{{ route('contacto_index_path') }}">Contacto</a></li>

                    @if($currentUser)
                      <li><a href="{{ route('curriculum_index_path') }}">Mi perfil</a></li>
                      <li><a href="{{ route('auth_destroy_path') }}">Cerrar sesion</a></li>
                    @else
                      <li><a href="{{ route('auth_store_path') }}">Ingresar</a></li>
                    @endif

                    @if($currentUser)
                      @if($currentUser->type==1)
                        <li><a href="{{ route('dashboard_index_path') }}">Panel</a></li>
                      @endif
                    @endif
                  </ul>
                </div>
              </nav>
            </header>
      </div>
  </div>

    @yield('content-wrapper')

    <footer id="footer">
      <img src="/img/2.png" alt="" width="200" height="200"/>
        <ul>
        <li><a href="{{ route('politicas_index_path') }}" target="_blank">Politicas</a></li>
        <li><a href="{{ route('terminos_index_path') }}" target="_blank" >Terminos</a></li>
      </ul>
  </footer>
  <!--footer-->

  <footer id="subfooter">
    World Talent Consulting Copyright (c) 2015 Copyright Holder All Rights Reserved.
  </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/menu.js"></script>
</body>
</html>
