<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>World Talent Consulting</title>
  <link rel="shortcut icon" href="{{asset('css/favicon.ico')}}" >

  <meta name="google-translate-customization" content="7eb3fe52473972a9-8f57e013ffc356f8-g61fe37f1e5fbdb27-1e"></meta>
  <meta name="keywords" content="Reclutamiento de ejecutivos en México, Headhunters en México, World Talent Consulting, Reclutamiento de Talento, Desarrollo Organizacional, Desarrollo Humano, Coaching Ejecutivo"/>
  <meta name="description" content="World Talent Consulting: nace como una empresa dedicada a ofrecer soluciones especializadas en Consultoría, Headhunting, Coaching y Outplacement. Hoy en día se he convertido en una empresa de consultoría global para el mercado Latinoamericano y Norteamericano.
  Nuestra principal función es asesorar (contribuir con nuestra experiencia desarrollando el talento y en su caso encontrar la persona con el Talento necesario para tu organización en las cuestiones sobre las cuales poseemos con mayor experiencia, para desarrollar el mejor talento para las empresas., headhunters en méxico, reclutamiento de ejecutivos, ofertas de empleo, reclutamiento de personal" />
  <meta name="distribution" content="global"/>


  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/wtc.css')}}">
  <link rel="stylesheet" href="{{asset('css/menu.css')}}">

  <meta property="og:url"           content="http://www.wtc-talent.worldtalentconsulting.com/" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="World Talent Consulting" />
	<meta property="og:description"   content="Vacncy" />
	<meta property="og:image"         content="http://www.wtc-talent.worldtalentconsulting.com/img/esca.jpg" />
</head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example that shows off a responsive product landing page.">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
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

              <li><a href="http://worldtalentconsulting.com/blog/" target="_blank">Blog</a></li>

              <li><a href="{{ route('contacto_index_path') }}">Contacto</a></li>

              @if($currentUser)
              @if($currentUser->type==0)
              <li><a href="{{ route('curriculum_index_path') }}">Mi perfil</a></li>
              @endif
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
  <section id="contain">
    @yield('content-wrapper')
  </section>
  <footer id="footer">

    <ul>
      <li><a href="{{ route('politicas_index_path') }}" target="_blank">Politicas</a></li>
      <li><a href="{{ route('terminos_index_path') }}" target="_blank" >Terminos</a></li>
    </ul>
    <div class="socios">
      <h3>Socios</h3>
      <article class="item__socios">
        <span><a href="http://www.bravo-intercultural.com/" target="_blank">Bravo Intercultural</a></span>
        <p>
          Am Friedhof 80 <br>
          22149 Hamburgo Alemania <br>
          Tel. fijo: +49 (0) 40 65 70 418 <br>
          Celular:  +49 (0) 162 23 27 864 <br>

        </p>
      </article>
    </div>
  </footer>


  <footer id="subfooter">
    <p>
      World Talent Consulting Copyright (c) 2015 Copyright Holder All Rights Reserved.
    </p>
  </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/menu.js"></script>
</body>
</html>
