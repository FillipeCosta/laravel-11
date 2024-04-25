<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DResidenciais extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tb_dResidenciais';

    protected $fillable = [
        'estado',
        'endereco',
        'bairro',
        'cidade',
        'uf_de_residencia',
        'cep',
        'telefone_residencial',
        'telefone_celular',
        'telefone_comercial',
    ];

}
