<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function index(){
        $cidades = Ficha::all();

        return view('fCadastral', compact('cidades'));
    }

    public function createFCadastro(){
        return view('fCadastral');
    }

    public function store(Request $request)
    {
        Ficha::create($request->all());

        return redirect()->route('ficha.index'); // redireciona para a rota de listagem
    }
}
