@extends('layouts.default')
@section('content-wrapper')

<div class="contain__def center">
  <h1 class="title__pages font-blue center relaway">Ingresar</h1>
  @if($errors->has())
      <div>
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<section class="contain__information center">
  <div class="flex__contain">
    <div class="item_other">
      <h3 class="font-blue relaway">Inicia sesion</h3>

      <form class="pure-form pure-form-aligned" method="post" action="{{ route('auth_store_path') }}">
        {{ csrf_field() }}
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Email</label>
                <input id="email" type="text" name="email" placeholder="Jonh">
            </div>
            <div class="pure-control-group">
                <label for="first_name">Password</label>
                <input id="password" type="password" name="password" placeholder="------------">
            </div>
            <div class="pure-controls">
                <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </div>
        </fieldset>
      </form>
    </div>
    <div class="item_other">
      <h3 class="font-blue relaway">Registrate</h3>
      <form class="pure-form pure-form-aligned" method="post" action="{{ route('auth_create_path') }}">
          {{ csrf_field() }}
          <fieldset>
              <div class="pure-control-group">
                  <label for="name">Nombre</label>
                  <input id="name" type="text" name="name" placeholder="Jonh">
              </div>
              <div class="pure-control-group">
                  <label for="first_name">Apellido paterno</label>
                  <input id="first_name" type="text" name="first_name" placeholder="White">
              </div>
              <div class="pure-control-group">
                  <label for="last_name">Apellido materno</label>
                  <input id="last_name" type="text" name="last_name" placeholder="Winehouse">
              </div>
              <div class="pure-control-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" name="email" placeholder="email@example.com">
              </div>

              <div class="pure-control-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" name="password" placeholder="Password">
              </div>

              <div class="pure-controls">
                  <button type="submit" class="pure-button pure-button-primary">Submit</button>
              </div>
          </fieldset>
      </form>
    </div>
  </div>
</section>
</div>
@stop
