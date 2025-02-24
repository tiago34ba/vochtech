@extends('layout')

@section('content')
    <h1>Detalhes da Bandeira</h1>
    <p>ID: {{ $bandeira->id }}</p>
    <p>Nome: {{ $bandeira->nome }}</p>
    <p>Grupo Econômico: {{ $bandeira->grupoEconomico->nome }}</p>
    <p>Data de Criação: {{ $bandeira->created_at }}</p>
    <p>Última Atualização: {{ $bandeira->updated_at }}</p>
    <a href="{{ route('bandeiras.index') }}">Voltar</a>
@endsection
