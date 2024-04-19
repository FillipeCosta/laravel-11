<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table = 'fichas_cadastrais';

    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "estado_id", "nome", "matricula", "admissao_data", "cargo", "funcao", "salario_referencia", "carga_horaria_semanal",
         "pcd", "reducao_carga_horaria", "readaptado", "data_nascimento", "sexo", "cor_raca", "nacionalidade", "uf_naturalidade",
         "naturalidade", "ci_numero", "ci_orgao_emissor", "ci_uf", "ci_data_emissao", "cpf", "pis_pasep", "titulo_eleitoral_numero", "zona_eleitoral",
         "secao_eleitoral", "estado_civil", "nome_conjuge", "nome_pai", "nome_mae", "endereco", "bairro", "cidade", "uf_residencia", "cep",
         "telefone_residencial", "telefone_celular", "telefone_comercial", "email", "unidade_primaria", "cre_unidade_administrativa_primaria",
         "lotacao_unidade_primaria", "turno_primario", "atuacao_primaria", "unidade_secundaria", "cre_unidade_administrativa_secundaria",
         "lotacao_unidade_secundaria", "turno_secundario", "atuacao_secundaria", "especialidade_disciplina_curso", "especialidade_referencia_salarial",
         "habilitacoes_cadastradas_sigrh", "composicao_curricular_habilitacao_aptidao", "curso_nome", "curso_instituicao", "curso_data_emissao", "curso_utilizacao",
         "curso_data", "curso_carga_horaria"
        // outros campos que você deseja atribuir em massa
    ];
}
