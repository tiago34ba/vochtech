@extends('layout')

@section('content')
    <h1>Editar Bandeira</h1>
    <form action="{{ route('bandeiras.update', $bandeira->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" value="{{ $bandeira->nome }}" required>
        </div>
        <div>
            <label>Grupo Econômico:</label>
            <select name="grupo_economico_id" required>
                <!-- Assumindo que você tem grupos econômicos cadastrados -->
                @foreach ($gruposEconomicos as $grupoEconomico)
                    <option value="{{ $grupoEconomico->id }}" {{ $bandeira->grupo_economico_id == $grupoEconomico->id ? 'selected' : '' }}>{{ $grupoEconomico->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
