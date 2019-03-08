@extends('auth.Layouts.index')

@section('container')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('Home.Principal.Show')}}">{{ env('APP_NAME') }}</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Recuperação de Senha</p>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
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
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar Link de Recuperação</button>
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
