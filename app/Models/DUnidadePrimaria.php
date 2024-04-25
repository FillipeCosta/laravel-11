<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DUnidades extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tb_dUnidade_Primaria';

    protected $fillable = [
        'unidade_primary',
        'cre_unidade_administrativa_primary',
        'lotacao_unidade_primary',
        'turno_primary',
        'atuacao_primary',
    ];


}
