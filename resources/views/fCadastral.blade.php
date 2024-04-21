@extends('template.main')

@section('content')
    <div class="container shadow ct-header">
        <span>
            <h2> Ficha Cadastral
        </span>
    </div>

    <div class="container shadow">

        <form action="{{ route('ficha.store') }}" method="POST">
            @csrf

            <div class="row shadow-sm ">
                <legend class="mb-3">Dados Profissionais</legend>
                <form action="{{ route('prof.store') }}" method="POST	">
                    @csrf()
                    <div class="col-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="input-group ">
                            <input type="text" class="form-control" name="matricula" placeholder="Matrícula">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group ">
                            <input type="date" class="form-control" name="admissao" placeholder="Data de Admissão">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group ">
                            <input type="text" class="form-control" name="cargo" placeholder="Cargo">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group ">
                            <input type="text" class="form-control" name="funcao" placeholder="Função">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="salario_referencia"
                                placeholder="Referência Salarial">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <input type="number" class="form-control" name="carga_horaria_semanal"
                                placeholder="Carga Horária Semanal">
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="basic-url" class="form-label"> Pessoa com Deficiência? </label>
                        <div class="input-group">
                            <select name="pcd" class="form-select" id="">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <input type="number" class="form-control" name="reducao_carga_horaria"
                                placeholder="reducao_carga_horaria">
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="basic-url" class="form-label"> Readaptado? </label>
                        <div class="input-group ">
                            <select name="readaptado" class="form-select" id="" placeholder="Readaptado (Sim/Não)">

                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm"> Salvar </button>
                </form>
            </div>


            <div class="row shadow-sm">
                <legend class="mb-3">Dados Pessoais</legend>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="data_nascimento" placeholder="Data de Nascimento">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="sexo" placeholder="Sexo">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="cor_raca" placeholder="Cor/Raça">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="nacionalidade" placeholder="Nacionalidade">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="uf_naturalidade"
                            placeholder="UF de Naturalidade">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="ci_numero" placeholder="Número do RG">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="ci_orgao_emissor"
                            placeholder="Órgão Emissor do RG">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="ci_uf" placeholder="UF do RG">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="ci_data_emissao"
                            placeholder="Data de Emissão do RG">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="cpf" placeholder="CPF">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="pis_pasep" placeholder="PIS/PASEP">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="titulo_eleitoral_numero"
                            placeholder="Título de Eleitor">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="zona_eleitoral" placeholder="Zona Eleitoral">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="secao_eleitoral" placeholder="Seção Eleitoral">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="estado_civil" placeholder="Estado Civil">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="nome_conjuge" placeholder="Nome do Cônjuge">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="nome_pai" placeholder="Nome do Pai">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="nome_mae" placeholder="Nome da Mãe">
                    </div>
                </div>
            </div>


















            <div class="row shadow-sm">
                <legend class="mb-3">Dados Residencias</legend>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="estado_id" placeholder="Estado">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="endereco" placeholder="Endereço">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="bairro" placeholder="Bairro">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                    </div>
                </div>


                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="uf_residencia" placeholder="UF de Residência">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="cep" placeholder="CEP">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="telefone_residencial"
                            placeholder="Telefone Residencial">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="telefone_celular"
                            placeholder="Telefone Celular">
                    </div>
                </div>


                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="telefone_comercial"
                            placeholder="Telefone Comercial">
                    </div>
                </div>

            </div>
            <div class="row shadow-sm">
                <legend class="mb-3">Unidade Primária</legend>
                <!-- Carga Primária -->
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="unidade_primaria"
                            placeholder="Unidade (Primária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cre_unidade_administrativa_primaria"
                            placeholder="CRE Unidade Administrativa (Primária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="lotacao_unidade_primaria"
                            placeholder="Lotação Unidade (Primária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="turno_primario" placeholder="Turno (Primário)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="atuacao_primaria"
                            placeholder="Atuação (Primária)">
                    </div>
                </div>

            </div>
            <div class="row shadow-sm">
                <legend class="mb-3">Unidade Secundária</legend>
                <!-- Carga Secundária -->
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="unidade_secundaria"
                            placeholder="Unidade (Secundária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cre_unidade_administrativa_secundaria"
                            placeholder="CRE Unidade Administrativa (Secundária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="lotacao_unidade_secundaria"
                            placeholder="Lotação Unidade (Secundária)">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="turno_secundario"
                            placeholder="Turno (Secundário)">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="atuacao_secundaria"
                            placeholder="Atuação (Secundária)">
                    </div>
                </div>
            </div>
            <div class="row shadow-sm">
                <legend class="mb-3">Cadastrados no SIGRH</legend>
                <!-- Especialidades e Cursos -->
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="especialidade_disciplina_curso"
                            placeholder="Especialidade/Disciplina/Curso">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="especialidade_referencia_salarial"
                            placeholder="Especialidade Referência Salarial">
                    </div>
                </div>
                <div class="col-3-8">
                    <div class="input-group">
                        <textarea class="form-control" name="habilitacoes_cadastradas_sigrh" col-3s="30" row shadow-sms="3"
                            placeholder="Habilitações Cadastradas no SIGRH"></textarea>
                    </div>
                </div>
                <div class="col-3-8">
                    <div class="input-group">
                        <textarea class="form-control" name="composicao_curricular_habilitacao_aptidao" col-3s="30" row shadow-sms="3"
                            placeholder="Composição Curricular e Habilitações/Aptidões Autorizadas"></textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="curso_nome" placeholder="Nome do Curso">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="curso_instituicao" placeholder="Instituição">
                    </div>
                </div>

            </div>
            <div class="row shadow-sm">
                <legend class="mb-3">Acadêmicos</legend>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="curso_data_emissao"
                            placeholder="Data de Emissão">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="curso_utilizacao"
                            placeholder="Utilização do Curso">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="curso_data" placeholder="Data de Conclusão">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="curso_carga_horaria"
                            placeholder="Carga Horária">
                    </div>
                </div>
            </div>

            <div class="row shadow-sm">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
            </div>
    </div>
    </form>

    </div>
@endsection
