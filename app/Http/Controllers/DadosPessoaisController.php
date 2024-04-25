<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class DadosPessoaisController extends Controller
{
    public function store(Request $request)
    {
        Pessoa::create($request->all());

        return redirect()->route('forms.index');
    }
}
