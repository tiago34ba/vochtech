@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Unidade</h1>
    <form action="{{ route('unidades.update', $unidade->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome_fantasia">Nome Fantasia:</label>
            <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" value="{{ $unidade->nome_fantasia }}" required>
        </div>
        <div class="form-group">
            <label for="razao_social">Razão Social:</label>
            <input type="text" class="form-control" id="razao_social" name="razao_social" value="{{ $unidade->razao_social }}" required>
        </div>
        <div class="form-group">
            <label for="cnpj">CNPJ:</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $unidade->cnpj }}" required>
        </div>
        <div class="form-group">
            <label for="bandeira_id">Bandeira:</label>
            <select class="form-control" id="bandeira_id" name="bandeira_id" required>
                @foreach($bandeiras as $bandeira)
                    <option value="{{ $bandeira->id }}" {{ $bandeira->id == $unidade->bandeira_id ? 'selected' : '' }}>{{ $bandeira->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
