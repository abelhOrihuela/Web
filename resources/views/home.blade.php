
@extends('layouts.default')
@section('content-wrapper')
<div>
  <!--Contenido--------------------------------------->
  <!--HEADER IMAGEN-->
  <header class="subheader__img">
    <section>
      <div class="title__wtc">
        <img src="img/logo.png" alt="" />
      </div>
      </video>
    </section>
  </header>
  <!--SUBHEADER IMAGEN-->


  <!--SUBHEADER FOOTER-->
  <header class="subheader__title">
    <h3 class="relaway font-blue" > Leading people . . . </h3>
  </header>
  <!--SUBHEADER FOOTER-->
  <div class="ver__video-wtc center" id="ver__video-wtc">
    <h4 class="open-sans">No olvides ver nuestro ultimo video... haz click !!</h4>
  </div>
  <div class="video__wtc center" id="video__wtc">
    <iframe  src="https://www.youtube.com/embed/-n4FhfYntdg" frameborder="0" allowfullscreen autoplay ></iframe>
  </div>

    <section class="contain__information center">
      <p class="font-gray">
        Nuestra pasión es buscar talentos que contribuyan al desarrollo de las mejores empresas.
      </p>

      <p class="font-gray">
        Trabajamos para ayudar a mejorar a las personas, para generar mejores empresas.
      </p>
      <p class="font-gray">
        "Alineamos el talento ejecutivo con la misión de su organización"
      </p>
      <p class="font-gray">
        "No cazamos gente ... Somos profesionales en identificar y atraer el talento que necesita su organización"
      </p>
    </section>
  <!--Introduccion-->

  <!--Metodologia-->
  <section class="contain__information-bgimg">
    <div class="contain__information center">
      <h2 class="font-blue relaway">Metodologia</h2>
      <ul>
        <li>La paciencia es el principio de una buena relación con el cliente.</li>
        <li>Los problemas y desacuerdos no aportan y hacen que perdamos la visión y el objetivo de nuestra misión.</li>
        <li>Nuestra principal contribución es orientarnos a procesos, no situaciones y conductas</li>
        <li>No somos parte integrante de ninguno de los equipos de organización, solo podemos ofrecer un punto de vista imparcial, comprometidos solo con los grandes objetivos de la organización.</li>
        <li>Identificamos los límites y los definimos.</li>
        <li>Nuestro seguimiento es aplicar el juicio del valor.</li>
      </ul>
    </div>
  </section>
  <!--Metodologia-->

  <!--services-->


  <!--services-->


<section class="contain__information center">


  <article class="item__service">
    <h3 class="bg-orange">C o a c h i n g</h3>
    <section>
      <p class="font-gray center">
        Hemos podido acompañar a cientos de líderes de negocios en los últimos años, dando como resultado un extraordinario Desarrollo de su POTENCIAL y sus TALENTOS.
        <a class="btn-primary" href="{{ route('coaching_index_path') }}">Leer mas ...</a>
      </p>
      <img  class="center" src="img/coach.jpg" alt="" />
    </section>
  </article>



  <article class="item__service">
    <h3 class="bg-blue">O u t p l a c e m e n t</h3>
    <section>
      <p class="font-gray center">
        "La perdida del trabajo es solo la conclusión de un ciclo profesional y el inicio de un nuevo reto".
        <a  class="btn-primary" href="{{ route('outplacement_index_path') }}">Leer mas ... </a>
      </p>
      <img class="center" src="img/des.jpg" alt="" />
    </section>
  </article>




  <article class="item__service">
    <h3 class="bg-green">D e s a r r o l l o  <br> o r g a n i z a c i o n a l</h3>
    <section>
      <p class="font-gray center">
        Conscientes de las necesidades de desarrollo y fortalecimiento de las Organizaciones, hemos desarrollado un programa encaminado a implementar los sistemas, procesos y estrategias.
        <a class="btn-primary" href="{{ route('desarrollo_index_path') }}">Leer mas ...</a>
      </p>
      <img class="center" src="img/esca.jpg" alt="" />

    </section>

  </article>
</section>




  <section class="contain__information center flex">
    <section class="flex__contain">
      <article class="item__text">
        <h3 class="bg-blue">Trabajomos para usted !</h3>
        <p class="font-gray">
          World Talent Consulting: nace como una empresa dedicada a ofrecer soluciones especializadas en Consultoría, Headhunting, Coaching y Outplacement. Hoy en día se he convertido en una empresa de consultoría global para el mercado Latinoamericano y Norteamericano.
        </p>
        <p class="font-gray">
          Nuestra principal función es asesorar (contribuir con nuestra experiencia desarrollando el talento y en su caso encontrar la persona con el Talento necesario para tu organización en las cuestiones sobre las cuales poseemos con mayor experiencia, para desarrollar el mejor talento para las empresas.
        </p>
      </article>
      <article class="item__text">
        <h3 class="bg-blue">Desarrolla tu talento</h3>
        <p class="font-gray">
          Te invita a formar parte de la cantera de World Talent Consulting, lo cual te permitirá ser considerado en los futuros procesos de búsqueda. Si quieres ser entrevistado, evaluado y guiado para una entrevista exitosa contactanos, nuestro Director de la División de Búsqueda de Talento, te atenderá y apoyara en los siguientes programas confidenciales. Si vives una situación relacionada a mejorar tu vida profesional laboral y personal no descrita en los puntos anteriores, escribenos y podremos ayudarte.
        </p>
      </article>
    </section>

  </section>
@stop
