@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Unidade</h1>
    <div class="card">
        <div class="card-header">
            Unidade #{{ $unidade->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Nome Fantasia: {{ $unidade->nome_fantasia }}</h5>
            <p class="card-text">Razão Social: {{ $unidade->razao_social }}</p>
            <p class="card-text">CNPJ: {{ $unidade->cnpj }}</p>
            <p class="card-text">Bandeira: {{ $unidade->bandeira->nome }}</p>
            <p class="card-text">Data de Criação: {{ $unidade->created_at }}</p>
            <p class="card-text">Última Atualização: {{ $unidade->updated_at }}</p>
            <a href="{{ route('unidades.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
@endsection
