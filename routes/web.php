<?php

use App\Http\Controllers\DadosProfissionaisController;
use App\Http\Controllers\DadosPessoaisController;
use App\Http\Controllers\DadosResidenciaisController;
use App\Http\Controllers\DadosUnidadesController;
use App\Http\Controllers\DadosAcademicosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('forms/forms');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

    Route::post('forms/prof/store',[DadosProfissionaisController::class, 'store'])->name('forms.prof.store');
    Route::post('forms/pess/store',[DadosPessoaisController::class, 'store'])->name('forms.pess.store');
    Route::post('forms/resi/store',[DadosResidenciaisController::class, 'store'])->name('forms.resi.store');
    Route::post('forms/unid/store',[DadosUnidadesController::class, 'store'])->name('forms.unid.store');
    Route::post('forms/acad/store',[DadosAcademicosController::class, 'store'])->name('forms.acad.store');

    Route::get('/forms', [DadosProfissionaisController::class, 'index'])->name('forms.index');

    Route::get('/forms/list/{id}', [DadosProfissionaisController::class, 'list'])->name('forms.list');
    Route::get('/forms/painel/cadastral', [DadosProfissionaisController::class, 'index'])->name('forms.cadastral');

