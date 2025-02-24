@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Unidades</h1>
    <a href="{{ route('unidade.create') }}" class="btn btn-primary mb-3">Criar Nova Unidade</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome Fantasia</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Bandeira</th>
                <th>Data de Criação</th>
                <th>Última Atualização</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $unidade)
                <tr>
                    <td>{{ $unidade->id }}</td>
                    <td>{{ $unidade->nome_fantasia }}</td>
                    <td>{{ $unidade->razao_social }}</td>
                    <td>{{ $unidade->cnpj }}</td>
                    <td>{{ $unidade->bandeira->nome }}</td>
                    <td>{{ $unidade->created_at }}</td>
                    <td>{{ $unidade->updated_at }}</td>
                    <td>
                        <a href="{{ route('unidades.show', $unidade->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('unidades.edit', $unidade->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('unidades.destroy', $unidade->id) }}" method="POST" style="display:inline;">
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
