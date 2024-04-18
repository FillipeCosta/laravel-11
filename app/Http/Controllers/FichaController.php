<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function index(){
        $allFicha = Ficha::all();
        dd($allFicha);
        return view('fCadastral');
    }

    public function createFCadastro(){
        return view('fCadastral');
    }

    public function store(Request $request)
    {
        dd($request);

        Ficha::create([
            $request->idCidade,
            $request->idEstado,
            $request->nome
        ]);

        return view('ficha.index');
    }
}
