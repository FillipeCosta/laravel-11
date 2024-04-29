<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Teste;
class Testes extends Component
{
    #[Validate('required|min:3')]
    public $nome = '';

    public function save()
    {
        $this->validate();

        Teste::create(
            $this->only(['nome'])
        );

        session()->flash('status', 'Post successfully updated.');

        return view('livewire.teste');
    }

    public function render()
    {
        return view('livewire.teste');
    }
}
