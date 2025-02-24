@extends('layout')

@section('content')
    <h1>Criar Nova Bandeira</h1>
    <form action="{{ route('bandeira.store') }}" method="POST">
        @csrf
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label>Grupo Econômico:</label>
            <select name="grupo_economico_id" required>
                <!-- Assumindo que você tem grupos econômicos cadastrados -->
                @foreach ($grupo_economicos as $grupo_economico)
                    <option value="{{ $grupo_economico->id }}">{{ $grupo_economico->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
