@extends('auth.Layouts.index')

@section('container')
<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('Home.Principal.Show')}}">{{ env('APP_NAME') }}</a>
    </div>
    <div class="register-box-body">
        <p class="login-box-msg">Registrar-se agora!</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="hidden" name="role_id" value="2">
            <div class="form-group has-feedback">
                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nome Completo" value="{{ old('name') }}" name="name" id="name" autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Melhor E-mail" name="email" id="email" value="{{ old('email') }}" >
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
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                </div>
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>- OU -</p>
            <a href="{{ route('password.request') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-asterisk"></i> Perdi Minha Senha</a>
            <a href="{{ route('login') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-user"></i> Já possuo conta!</a>
            <a href="{{ route('Home.Principal.Show') }}" class="btn btn-block btn-default btn-flat"><i class="fa fa-home"></i> Voltar a Home</a>
        </div>
    </div>
</div>
@endsection
