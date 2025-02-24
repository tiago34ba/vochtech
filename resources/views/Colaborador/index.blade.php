@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Colaboradores</h1>
    <a href="{{ route('colaborador.create') }}" class="btn btn-primary mb-3">Criar Novo Colaborador</a>
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
                <th>Email</th>
                <th>CPF</th>
                <th>Unidade</th>
                <th>Data de Criação</th>
                <th>Última Atualização</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colaboradores as $Colaborador)
                <tr>
                    <td>{{ $colaborador->id }}</td>
                    <td>{{ $colaborador->nome }}</td>
                    <td>{{ $colaborador->email }}</td>
                    <td>{{ $colaborador->cpf }}</td>
                    <td>{{ $colaborador->unidade->nome_fantasia }}</td>
                    <td>{{ $colaborador->created_at }}</td>
                    <td>{{ $colaborador->updated_at }}</td>
                    <td>
                        <a href="{{ route('colaboradores.show', $colaborador->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST" style="display:inline;">
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
