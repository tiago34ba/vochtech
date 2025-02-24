<?php

namespace App\Http\Controllers\Colaborador;

use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::with('unidade')->get();
        return view('colaborador.index', compact('colaboradores'));
    }

    public function create()
    {
        $unidades = Unidade::all();
        return view('colaborador.create', compact('unidades'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:colaboradores',
            'cpf' => 'required|unique:colaboradores',
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        Colaborador::create($data);

        return redirect()->route('colaboradores.index')->with('success', 'Colaborador criado com sucesso.');
    }
}
