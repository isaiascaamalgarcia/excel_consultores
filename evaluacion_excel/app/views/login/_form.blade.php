@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-md-offset-3">
      <div class="form-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#sectionA">Acceso</a></li>
          <li><a data-toggle="tab" href="#sectionB">Registro</a></li>
        </ul>
        <div class="tab-content">
          <div id="sectionA" class="tab-pane fade in active form-box">
            <br>
            {{ Form::open(['url' => 'login', 'id' => 'login-form']) }}
              @if(Session::has('error_message'))
                <div class="alert alert-warning">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>¡Atención!</strong> {{ Session::get('error_message') }}
                </div>
              @endif
              <div class="form-group">
                {{ Form::label('username', 'Usuario') }}
                {{ Form::text('username', null, ['class' => 'form-control']) }}
              </div>
              <div class="form-group">
                {{ Form::label('password', 'Contraseña')}}
                <input type="password" name="pass" class="form-control">
              </div>
              {{ Form::submit('Acceder', ['class' => 'btn btn-success', 'id' => 'submit_login']) }}
            {{ Form::close()}}
            <div class="clearfix"></div>
          </div>
          <div id="sectionB" class="tab-pane fade">
            <div class="innter-form">
              <br>
              {{Form::open(['url' => 'register', 'id' => 'register-form'])}}
                <div class="form-group">
                  {{ Form::label('name', 'Nombre')}}
                  {{ Form::text('name', null, [ 'class' => 'form-control'])}}
                  <span id="error_name" class="error"></span>
                </div>
                <div class="form-group">
                  {{ Form::label('last_name', 'Apellidos')}}
                  {{ Form::text('last_name', null, [ 'class' => 'form-control'])}}
                  <span id="error_last_name" class="error"></span>
                </div>
                <div class="form-group">
                  {{ Form::label('username', 'Usuario')}}
                  {{ Form::text('username', null, [ 'class' => 'form-control'])}}
                  <span id="error_username" class="error"></span>
                </div>
                <div class="form-group">
                  {{ Form::label('username', 'Contraseña')}}
                  <input type="password" name="pass" class="form-control">
                  <span id="error_password" class="error"></span>
                </div>
                {{ Form::submit('Guardar', [ 'class' => 'btn btn-primary', 'id' => 'submit_register'])}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('style')
  {{ HTML::style('css/app/app.css')}}
@stop

@section('script')
  {{ HTML::script('js/login.js')}}
@stop
