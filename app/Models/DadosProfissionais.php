<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosProfissionais extends Model
{
    use HasFactory;

    protected $table = 'DadosProfissionais';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'matricula',
        'dt_admissao',
        'funcao',
        'nivel_ep',
        'idRegime',
        'salario_referencia',
        'carga_horaria_semanal',
        'pcd',
        'reducao_carga_horaria',
        'readaptado'
    ];
}
