<?php

namespace App\Http\Controllers;

use App\Models\DResidenciais;
use Illuminate\Http\Request;

class DadosResidenciaisController extends Controller
{
    public function store(Request $request)
    {
        DResidenciais::create($request->all());

        return redirect()->route('forms.index');
    }
}
