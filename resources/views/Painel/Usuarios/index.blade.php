@extends('Painel.Layouts.index')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Gerência de Usuários
                <small>Sistema {{ env('APP_NAME') }}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('Painel.Principal.index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Gerência de Usuários</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">



            </div>
        </section>
    </div>
@endsection
