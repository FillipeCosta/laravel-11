<?php

use App\Http\Controllers\FichaController;
use App\Http\Controllers\PainelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PainelController::class, 'Index'])->name(('index'));

Route::post('/fichas', [FichaController::class, 'store'])->name('ficha.store');
Route::get('/fichas', [FichaController::class, 'index'])->name('ficha.index');
Route::get('/fichas/createfc', [FichaController::class, 'createFCadastro'])->name('ficha.createfc');
