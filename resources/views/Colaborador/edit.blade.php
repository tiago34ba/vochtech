@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Colaborador</h1>

    <form action="{{ route('colaboradores.update', $colaborador) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $colaborador->nome) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $colaborador->email) }}" required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf', $colaborador->cpf) }}" required>
        </div>

        <div class="form-group">
            <label for="unidade_id">Unidade</label>
            <select class="form-control" id="unidade_id" name="unidade_id" required>
                <!-- Supondo que você tenha uma variável $unidades com as unidades disponíveis -->
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}" {{ $unidade->id == $colaborador->unidade_id ? 'selected' : '' }}>
                        {{ $unidade->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('colaboradores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
