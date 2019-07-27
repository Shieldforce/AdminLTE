@extends('Painel.Layouts.index')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Cadastro de Usuários
                <small>Sistema {{ env('APP_NAME') }}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('Painel.Principal.Show') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Cadastro de Usuários</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="col-xs-6">

                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cadastrando usuário</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form">


                                <div class="form-group has-error">

                                    <label class="control-label label-error" for="inputError">
                                        <i class="fa fa-times-circle-o"></i> Input with error
                                    </label>

                                    <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                                    <span class="help-block">Help block with error</span>
                                </div>

                                <!-- select -->
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    <button type="submit" class="btn btn-danger pull-right">Cancelar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </section>
    </div>
@endsection
