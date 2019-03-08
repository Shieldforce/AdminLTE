@extends('auth.Layouts.index')

@section('container')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('Home.Principal.Show')}}">{{ env('APP_NAME') }}</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Entre no Painel de Controle</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Digite seu E-mail" name="email" id="email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" id="password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>- OU -</p>
            <a href="{{ route('password.request') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-asterisk"></i> Perdi Minha Senha</a>
            <a href="{{ route('register') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-user"></i> Registrar-me</a>
            <a href="{{ route('Home.Principal.Show') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-home"></i> Voltar a Home</a>
        </div>
    </div>
</div>
@endsection