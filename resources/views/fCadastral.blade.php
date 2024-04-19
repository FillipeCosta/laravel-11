@extends('template.main')

@section('content')
    <h1>Ficha Cadastral</h1>

    <form action="{{ route('ficha.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control"name="estado_id" placeholder="Estado">
                </div>
            </div>
        </div>

        <input type="text" class="form-control"name="matricula" placeholder="Matrícula">
        <input type="text" class="form-control"name="admissao_data" placeholder="Data de Admissão">
        <input type="text" class="form-control"name="cargo" placeholder="Cargo">
        <input type="text" class="form-control"name="funcao" placeholder="Função">
        <input type="text" class="form-control"name="salario_referencia" placeholder="Referência Salarial">
        <input type="text" class="form-control" name="carga_horaria_semanal" placeholder="Carga Horária Semanal">
        <input type="text" class="form-control"name="pcd" placeholder="Pessoa com Deficiência (Sim/Não)">
        <input type="text" class="form-control"name="reducao_carga_horaria" placeholder="Redução de Carga Horária">
        <input type="text" class="form-control"name="readaptado" placeholder="Readaptado (Sim/Não)">
        <input type="text" class="form-control"name="data_nascimento" placeholder="Data de Nascimento">
        <input type="text" class="form-control"name="sexo" placeholder="Sexo">
        <input type="text" class="form-control"name="cor_raca" placeholder="Cor/Raça">
        <input type="text" class="form-control"name="nacionalidade" placeholder="Nacionalidade">
        <input type="text" class="form-control"name="uf_naturalidade" placeholder="UF de Naturalidade">
        <input type="text" class="form-control"name="naturalidade" placeholder="Naturalidade">
        <input type="text" class="form-control"name="ci_numero" placeholder="Número do RG">
        <input type="text" class="form-control"name="ci_orgao_emissor" placeholder="Órgão Emissor do RG">
        <input type="text" class="form-control"name="ci_uf" placeholder="UF do RG">
        <input type="text" class="form-control"name="ci_data_emissao" placeholder="Data de Emissão do RG">
        <input type="text" class="form-control"name="cpf" placeholder="CPF">
        <input type="text" class="form-control"name="pis_pasep" placeholder="PIS/PASEP">
        <input type="text" class="form-control"name="titulo_eleitoral_numero" placeholder="Título de Eleitor">
        <input type="text" class="form-control"name="zona_eleitoral" placeholder="Zona Eleitoral">
        <input type="text" class="form-control"name="secao_eleitoral" placeholder="Seção Eleitoral">
        <input type="text" class="form-control"name="estado_civil" placeholder="Estado Civil">
        <input type="text" class="form-control"name="nome_conjuge" placeholder="Nome do Cônjuge">
        <input type="text" class="form-control"name="nome_pai" placeholder="Nome do Pai">
        <input type="text" class="form-control"name="nome_mae" placeholder="Nome da Mãe">
        <input type="text" class="form-control" name="endereco" placeholder="Endereço">
        <input type="text" class="form-control"name="bairro" placeholder="Bairro">
        <input type="text" class="form-control"name="cidade" placeholder="Cidade">
        <input type="text" class="form-control"name="uf_residencia" placeholder="UF de Residência">
        <input type="text" class="form-control" name="cep" placeholder="CEP">
        <input type="text" class="form-control"name="telefone_residencial" placeholder="Telefone Residencial">
        <input type="text" class="form-control"name="telefone_celular" placeholder="Telefone Celular">
        <input type="text" class="form-control"name="telefone_comercial" placeholder="Telefone Comercial">
        <input type="text" class="form-control"name="email" placeholder="Email">

        {{-- CARGA PRIMÁRIA --}}
        <input type="text" name="unidade_primaria" placeholder="Unidade (Primária)">
        <input type="text" name="cre_unidade_administrativa_primaria"
            placeholder="CRE Unidade Administrativa (Primária)">
        <input type="text" name="lotacao_unidade_primaria" placeholder="Lotação Unidade (Primária)">
        <input type="text" name="turno_primario" placeholder="Turno (Primário)">
        <input type="text" name="atuacao_primaria" placeholder="Atuação (Primária)">

        {{-- CARGA SECUNDARIA --}}
        <input type="text" name="unidade_secundaria" placeholder="Unidade (Secundária)">
        <input type="text" name="cre_unidade_administrativa_secundaria"
            placeholder="CRE Unidade Administrativa (Secundária)">
        <input type="text" name="lotacao_unidade_secundaria" placeholder="Lotação Unidade (Secundária)">
        <input type="text" name="turno_secundario" placeholder="Turno (Secundário)">
        <input type="text" name="atuacao_secundaria" placeholder="Atuação (Secundária)">

        <input type="text" name="especialidade_disciplina_curso" placeholder="Especialidade/Disciplina/Curso">
        <input type="text" name="especialidade_referencia_salarial" placeholder="Especialidade Referência Salarial">
        <textarea name="habilitacoes_cadastradas_sigrh" cols="30" rows="10"
            placeholder="Habilitações Cadastradas no SIGRH"></textarea>
        <textarea name="composicao_curricular_habilitacao_aptidao" cols="30" rows="10"
            placeholder="Composição Curricular e Habilitações/Aptidões Autorizadas"></textarea>

        {{-- Cursos --}}
        <input type="text" name="curso_nome" placeholder="Nome do Curso">
        <input type="text" name="curso_instituicao" placeholder="Instituição">
        <input type="text" name="curso_data_emissao" placeholder="Data de Emissão">
        <input type="text" name="curso_utilizacao" placeholder="Utilização do Curso">
        <input type="text" name="curso_data" placeholder="Data de Conclusão">
        <input type="text" name="curso_carga_horaria" placeholder="Carga Horária">

        <input type="submit" value="Enviar">
    </form>

    @foreach ($cidades as $cidade)
        <p>{{ $cidade['nome'] }}</p>
    @endforeach
@endsection
