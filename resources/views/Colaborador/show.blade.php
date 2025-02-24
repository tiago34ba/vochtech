@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Colaborador</h1>

    <div class="card">
        <div class="card-header">
            Colaborador: {{ $colaborador->nome }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $colaborador->id }}</p>
            <p><strong>Nome:</strong> {{ $colaborador->nome }}</p>
            <p><strong>Email:</strong> {{ $colaborador->email }}</p>
            <p><strong>CPF:</strong> {{ $colaborador->cpf }}</p>
            <p><strong>Unidade:</strong> {{ $colaborador->unidade->nome ?? 'N/A' }}</p> <!-- Supondo que você tenha um relacionamento com Unidade -->
            <p><strong>Data de Criação:</strong> {{ $colaborador->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Última Atualização:</strong> {{ $colaborador->updated_at->format('d/m/Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('colaboradores.index') }}" class="btn btn-secondary">Voltar</a>
            <a href="{{ route('colaboradores.edit', $colaborador) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('colaboradores.destroy', $colaborador) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endsection
