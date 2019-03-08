@extends('auth.Layouts.index')

@section('container')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('Home.Principal.Show')}}">{{ env('APP_NAME') }}</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Dados para Reset de Senha</p>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

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
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Sua Senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Repita Sua Senha" name="password_confirmation" id="password-confirm">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Resetar Senha</button>
                </div>
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>- OU -</p>
            <a href="{{ route('login') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-user"></i> Já possuo conta!</a>
            <a href="{{ route('register') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-user"></i> Registrar-me</a>
            <a href="{{ route('Home.Principal.Show') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-home"></i> Voltar a Home</a>
        </div>
    </div>
</div>
@endsection