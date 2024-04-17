<?php


use App\Http\Controllers\FCadastroController;
use App\Http\Controllers\FFuncionalController;
use App\Http\Controllers\PainelController;
use Illuminate\Support\Facades\Route;

Route::get('/fcadastro', [FCadastroController::class, 'Index'])->name('fcadastro.index');
Route::get('/ffuncional', [FFuncionalController::class, 'Index'])->name('ffuncional.index');
Route::get('/', [PainelController::class, 'Index'])->name(('painel.index'));
