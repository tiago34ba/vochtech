<?php

namespace App\Livewire;

use Livewire\Component;

class GrupoEconomico extends Component
{
    public $grupo_economico;
    public $bandeira;
    public $unidade;

    public function mount()
    {
        // Definindo os valores das variáveis
        $this->grupo_economico = '';
        $this->bandeira = '';
        $this->unidade = '';
    }

    public function render()
    {
        return view('livewire.grupoeconomico', [
            'grupo_economico' => $this->grupo_economico,
            'bandeira' => $this->bandeira,
            'unidade' => $this->unidade
        ]);
    }
}
