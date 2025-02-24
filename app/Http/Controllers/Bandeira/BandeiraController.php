<?php
namespace App\Http\Controllers\Bandeira;

use App\Models\Bandeira;
use App\Models\GrupoEconomico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BandeiraController extends Controller
{
    public function index()
    {
        $grupo_economicos = GrupoEconomico::all();
        return view('bandeiras.create', compact('grupo_economicos'));
    }

    public function create()
    {
        $gruposeconomicos = GrupoEconomico::all();
        return view('bandeira.create', compact('gruposeconomicos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'grupo_economico_id' => 'required|exists:grupo_economicos,id',
        ]);

        Bandeira::create($data);

        return redirect()->route('bandeiras.index')->with('success', 'Bandeira criada com sucesso.');
    }

    public function show(Bandeira $bandeira)
    {
        return view('bandeiras.show', compact('bandeira'));
    }

    public function edit(Bandeira $bandeira)
    {
        $gruposeconomicos = GrupoEconomico::all();
        return view('bandeiras.edit', compact('bandeira', 'gruposeconomicos'));
    }

    public function update(Request $request, Bandeira $bandeira)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'grupo_economico_id' => 'required|exists:grupo_economicos,id',
        ]);

        $bandeira->update($data);

        return redirect()->route('bandeiras.index')->with('success', 'Bandeira atualizada com sucesso.');
    }

    public function destroy(Bandeira $bandeira)
    {
        $bandeira->delete();

        return redirect()->route('bandeiras.index')->with('success', 'Bandeira deletada com sucesso.');
    }
}
