<?php

namespace App\Http\Controllers;

use App\Models\DadosProfissionais;
use Illuminate\Http\Request;

class DadosProfissionaisController extends Controller
{
    public function index(){

        return view('forms/forms');
    }

    public function list()
    {
        $list = DadosProfissionais::all();

        return view('forms/forms-list', compact('list'));
    }

    public function store(Request $request)
    {
        // dd($request);

        $data = $request->all();

        DadosProfissionais::create($data);

        return redirect()->route('forms.index'); // redireciona para a rota de listagem
    }
}
