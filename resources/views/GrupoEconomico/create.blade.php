@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Criar Novo Grupo Econômico</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('grupo-economico.index') }}"> Voltar</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Opa!</strong> Houve alguns problemas com a sua entrada.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('grupo-economico.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        <input type="text" name="nome" class="form-control" placeholder="Nome">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
