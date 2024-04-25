<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DUnidades extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tb_dUnidade_Secundaria';

    protected $fillable = [
        'unidade_secondary',
        'cre_unidade_administrativa_secondary',
        'lotacao_unidade_secondary',
        'turno_secondary',
        'atuacao_secondary',
    ];

}
