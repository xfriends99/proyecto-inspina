@extends('layouts.auth')

@section('content')
    <main class="animated fadeInDown">
        <div class="row">
            <div class="login-header">
                <img src="{{asset('img/logos/img-logo-001.svg')}}"/>
                <h1>Bienvenido a OneCup</h1>
                <p>Complete con sus datos para ingresar</p>
            </div>
            <div class="login-form">
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Correo electrónico o usuario" required>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block text-left text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block text-left text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-blue">Acceder</button>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <a href="{{ route('register') }}">¿No tienes una cuenta?</a>
                <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </main>
@endsection
