@extends('layouts.auth')

@section('content')
    <main class="animated fadeInDown">
        <div class="row">
            <div class="login-header">
                <img src="{{asset('img/logos/img-logo-001.svg')}}"/>
                <h1>Bienvenido a OneCup</h1>
                <p>Restablecer la contraseña</p>
            </div>
            <div class="login-form">
                @if (session('status'))
                    <div class="alert alert-success text-left">
                        {{ session('status') }}
                    </div>
                @endif
                <form role="form" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

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
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block text-left text-danger">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-blue">Restablecer contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
