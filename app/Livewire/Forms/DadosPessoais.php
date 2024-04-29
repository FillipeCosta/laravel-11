<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use App\Models\Pessoa;

class DadosPessoais extends Component
{
    public $nome;
    public $apelido;
    public $email;
    public $dataDeNascimento; // dd/mm/aaaa
    public $sexo;
    public $corRaca;
    public $nacionalidade;
    public $ufDeNaturalidade;
    public $naturalidade;
    public $numeroDoRG;
    public $orgaoEmissorDoRG;
    public $ufDoRG;
    public $dataDeEmissaoDoRG; // dd/mm/aaaa
    public $cpf;
    public $pisPasep;
    public $tituloDeEleitor;
    public $zonaEleitoral;
    public $secaoEleitoral;
    public $estadoCivil;
    public $nomeDoConjuge;
    public $nomeDoPai;
    public $nomeDaMae;

    public function store(){

        $validatedData = $this->validate([
            'nome' => 'required|string|max:255',
            'apelido' => 'nullable|string|max:255',
            'email' => 'required|email',
            'dataDeNascimento' => 'required|date_format:d/m/Y',
            'sexo' => 'required',
            'corRaca' => 'required',
            'nacionalidade' => 'required',
            'ufDeNaturalidade' => 'required',
            'naturalidade' => 'required',
            'numeroDoRG' => 'required',
            'orgaoEmissorDoRG' => 'required',
            'ufDoRG' => 'required',
            'dataDeEmissaoDoRG' => 'required|date_format:d/m/Y',
            'cpf' => 'required|digits:11',
            'pisPasep' => 'nullable|digits_between:10,11',
            'tituloDeEleitor' => 'nullable|digits_between:10,12',
            'zonaEleitoral' => 'nullable|numeric',
            'secaoEleitoral' => 'nullable|numeric',
            'estadoCivil' => 'required',
            'nomeDoConjuge' => 'nullable|string|max:255',
            'nomeDoPai' => 'nullable|string|max:255',
            'nomeDaMae' => 'required|string|max:255'
        ]);

        Pessoa::create($validatedData);
        // Post::create($this->all());

        session()->flash('message', 'Registro realizado com sucesso!');

    }

    public function render()
    {
        return view('livewire.forms.dados-pessoais');
    }
}
