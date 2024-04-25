<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DAcademicos extends Model
{
    use HasFactory;

    protected $table = 'tb_dAcademicos';

    public $timestamps = false;

    protected $fillable = [
        'especialidade_disciplina_curso',
        'especialidade_referencia_salarial',
        'habilitacoes_cadastradas_no_sigrh',
        'composicao_curricular_e_habilitacoes',
        'nome_do_curso',
        'instituicao',
        'especialidade_disciplina_curso',
        'especialidade_referencia_salarial',
        'habilitacoes_cadastradas_no_sigrh',
        'composicao_curricular_e_habilitacoes',
        'nome_do_curso',
        'instituicao',
    ];

}
