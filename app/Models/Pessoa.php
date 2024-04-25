<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'Pessoa';

    public $timestamps = false;

    protected $fillable = [
        'data_de_nascimento',
        'sexo',
        'cor_raca',
        'nacionalidade',
        'uf_de_naturalidade',
        'naturalidade',
        'numero_do_rg',
        'orgao_emissor_do_rg',
        'uf_do_rg',
        'data_de_emissao_do_rg',
        'cpf',
        'pis_pasep',
        'titulo_de_eleitor',
        'zona_eleitoral',
        'secao_eleitoral',
        'estado_civil',
        'nome_do_conjuge',
        'nome_do_pai',
        'nome_da_mae',
    ];

}
