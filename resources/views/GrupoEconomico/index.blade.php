@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Grupos Econômicos</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('grupo-economico.create') }}"> Criar Novo Grupo Econômico</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
                <th width="280px">Ação</th>
            </tr>
            @foreach ($grupoEconomicos as $grupoEconomico)
                <tr>
                    <td>{{ $grupoEconomico->id }}</td>
                    <td>{{ $grupoEconomico->nome }}</td>
                    <td>{{ $grupoEconomico->created_at }}</td>
                    <td>{{ $grupoEconomico->updated_at }}</td>
                    <td>
                        <form action="{{ route('grupo-economico.destroy', $grupoEconomico->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('grupo-economico.show', $grupoEconomico->id) }}">Mostrar</a>
                            <a class="btn btn-primary" href="{{ route('grupo-economico.edit', $grupoEconomico->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
