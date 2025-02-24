@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Bandeiras</h1>
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createBandeiraModal">
        Criar Nova Bandeira
    </button>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Grupo Econômico</th>
                <th>Data de Criação</th>
                <th>Última Atualização</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bandeiras as $bandeira)
                <tr>
                    <td>{{ $bandeira->id }}</td>
                    <td>{{ $bandeira->nome }}</td>
                    <td>{{ $bandeira->grupoEconomico->nome }}</td>
                    <td>{{ $bandeira->created_at->format('d/m/Y') }}</td>
                    <td>{{ $bandeira->updated_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('bandeiras.show', $bandeira->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('bandeiras.edit', $bandeira->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('bandeiras.destroy', $bandeira->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
