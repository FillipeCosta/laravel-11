<?php

namespace App\Http\Controllers;

use App\Models\FCadastro;
use Illuminate\Http\Request;

class FCadastroController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
