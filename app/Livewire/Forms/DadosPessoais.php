<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate; // PRECISA SER IMPORTADO PARA VALIDAÇÃO FUNCIONAR
use Livewire\Component;
use App\Models\Pessoa;

class DadosPessoais extends Component
{

    public $apelido;
    #[Validate('required')]
    public $email;
    public $data_nascimento;
    public $sexo;
    public $cor_raca;
    public $nacionalidade;
    public $uf_naturalidade;
    public $naturalidade;
    public $rg_numero;
    public $rg_orgao_emissor;
    public $rg_uf;
    public $rg_data_emissao;
    public $cpf;
    public $pis_pasep;
    public $titulo_eleitoral_numero;
    public $zona_eleitoral;
    public $secao_eleitoral;
    public $estado_civil;
    public $nome_conjuge;
    public $nome_pai;
    public $nome_mae;

    public function store()
    {
        $this->validate();

        Pessoa::create($this->all());

        session()->flash('message', 'Registro realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.forms.dados-pessoais');
    }
}
