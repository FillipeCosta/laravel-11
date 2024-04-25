<?php

namespace App\Http\Controllers;

use App\Models\DUnidades;
use Illuminate\Http\Request;

class DadosUnidadesController extends Controller
{
    public function store(Request $request)
    {
        DUnidades::create($request->all());

        return redirect()->route('forms.index');
    }
}
