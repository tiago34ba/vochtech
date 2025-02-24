@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Colaborador</h1>

    <form action="{{ route('colaborador.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="{{ old('nome') }}" required>
            @error('nome')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" value="{{ old('cpf') }}" required>
            @error('cpf')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="unidade_id">Unidade</label>
            <select class="form-control" id="unidade_id" name="unidade_id" required>
                <option value="">Selecione a unidade</option>
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}" {{ old('unidade_id') == $unidade->id ? 'selected' : '' }}>{{ $unidade->nome }}</option>
                @endforeach
            </select>
            @error('unidade_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3"> <!-- Adiciona margem superior -->
            <button type="submit" class="btn btn-success">Criar</button>
            <a href="{{ route('colaborador.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $('#cpf').mask('000.000.000-00'); // Máscara para CPF
    });
</script>
@endsection
