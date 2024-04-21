<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DProfissionais extends Model
{
    use HasFactory;

    protected $table = 'tb_dprofissionais';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'matricula',
        'admissao',
        'funcao',
        'salario_referencia',
        'carga_horaria_semanal',
        'pcd',
        'reducao_carga_horaria',
        'readaptado'
    ];
}
