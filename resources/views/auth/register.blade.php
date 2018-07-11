@extends('layouts.auth')

@section('content')
    <main class="animated fadeInDown">
        <div class="row">
            <div class="login-header">
                <img src="{{asset('img/logos/img-logo-001.svg')}}"/>
                <h1>Bienvenido a OneCup</h1>
                <p>Registrate</p>
            </div>
            <div class="login-form">
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" required value="{{ old('name') }}" autofocus>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block text-left text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="form-group">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Correo electrónico" required value="{{ old('email') }}" >
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block text-left text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="form-group">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required >
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block text-left text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-blue">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
