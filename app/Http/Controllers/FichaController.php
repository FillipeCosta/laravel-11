<?php

namespace App\Http\Controllers;

use App\Models\DProfissionais;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function index(){
        $cidades = DProfissionais::all();

        return view('fCadastral', compact('cidades'));
    }

    public function createFCadastro(){
        return view('fCadastral');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        DProfissionais::create($request->all());

        return redirect()->route('ficha.index'); // redireciona para a rota de listagem
    }
}
