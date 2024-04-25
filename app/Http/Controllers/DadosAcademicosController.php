<?php

namespace App\Http\Controllers;

use App\Models\DAcademicos;
use Illuminate\Http\Request;

class DadosAcademicosController extends Controller
{
    public function store(Request $request)
    {
        DAcademicos::create($request->all());

        return redirect()->route('forms.index');
    }
}
