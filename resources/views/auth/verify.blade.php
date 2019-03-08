@extends('auth.Layouts.index')

@section('container')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('Home.Principal.Show')}}">{{ env('APP_NAME') }}</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Verificação!</p>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Verifique sua caixa de e-mail!</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        Foi enviado um link de verificação para seu e-mail
                                    </div>
                                @endif

                                    Antes de prosseguir, verifique seu e-mail em busca de um link de verificação.
                                    Se você não recebeu o email, <a href="{{ route('verification.resend') }}">Clique aqui para solicitar outro</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection