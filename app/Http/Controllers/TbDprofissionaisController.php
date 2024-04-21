<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DProfissionais;
use Illuminate\Http\Request;

class TbDprofissionaisController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        DProfissionais::create($request->all());

        return redirect()->route('ficha.index'); // redireciona para a rota de listagem
    }
}
