<?php

namespace App\Http\Controllers\Unidade;

use App\Models\Unidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnidadeController extends Controller
{
    public function index()
    {
        $unidades = Unidade::all();
        return view('unidade.index', compact('unidades'));
    }

    public function create()
    {
        return view('unidade.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'cnpj' => 'required|unique:unidades',
            'bandeira_id' => 'required',
        ]);

        Unidade::create($request->all());

        return redirect()->route('unidades.index');
    }

    public function show(Unidade $unidade)
    {
        return view('unidades.show', compact('unidade'));
    }

    public function edit(Unidade $unidade)
    {
        return view('unidades.edit', compact('unidade'));
    }

    public function update(Request $request, Unidade $unidade)
    {
        $request->validate([
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'cnpj' => 'required|unique:unidades,cnpj,' . $unidade->id,
            'bandeira_id' => 'required',
        ]);

        $unidade->update($request->all());

        return redirect()->route('unidades.index');
    }

    public function destroy(Unidade $unidade)
    {
        $unidade->delete();
        return redirect()->route('unidades.index');
    }
}
