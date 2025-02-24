<?php

namespace App\Http\Controllers\GrupoeEconomico;

use App\Models\GrupoEconomico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrupoEconomicoController extends Controller
{
    public function index()
    {
        $grupoEconomicos = GrupoEconomico::all();
        return view('grupoeconomico.index', compact('grupoEconomicos'));
    }

    public function create()
    {
        return view('grupoeconomico.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        GrupoEconomico::create($data);

        return redirect()->route('grupo-economico.index')->with('success', 'Grupo Econômico criado com sucesso.');
    }

    public function show(GrupoEconomico $grupoEconomico)
    {
        return view('grupo_economico.show', compact('grupoEconomico'));
    }

    public function edit(GrupoEconomico $grupoEconomico)
    {
        return view('grupoeconomico.edit', compact('grupoEconomico'));
    }

    public function update(Request $request, GrupoEconomico $grupoEconomico)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $grupoEconomico->update($data);

        return redirect()->route('grupo-economico.index')->with('success', 'Grupo Econômico atualizado com sucesso.');
    }

    public function destroy(GrupoEconomico $grupoEconomico)
    {
        $grupoEconomico->delete();

        return redirect()->route('grupo_economico.index')->with('success', 'Grupo Econômico excluído com sucesso.');
    }
}
