<?php

namespace App\Livewire\Forms;

use App\Models\Endereco;
use App\Models\Estado;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Enderecos extends Component
{

    #[Validate('required')]
    public $estado;
    #[Validate('required')]
    public $endereco;
    #[Validate('required')]
    public $bairro;
    #[Validate('required')]
    public $cidade;
    #[Validate('required')]
    public $uf_residencia;
    #[Validate('required')]
    public $cep;
    #[Validate('required')]
    public $telefone_residencial;
    #[Validate('required')]
    public $telefone_celular;
    #[Validate('required')]
    public $telefone_comercial;

    public function store()
    {
        $this->validate();

        Endereco::create($this->all());

        session()->flash('message', 'Registro realizado com sucesso!');
    }

    public function render()
    {
        $estados = Estado::all();

        return view('livewire.forms.enderecos', compact('estados'));
    }
}
