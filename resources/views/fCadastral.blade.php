@extends('template.main')

@section('content')
    <div class="container shadow ct-header">
        <span>
            <h2> Ficha Cadastral
        </span>
    </div>
    <div class="container ct-painel shadow">
        <div class="tab-content" id="nav-tabContent">


            <x-tab-form-component></x-tab-form-component>

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <x-form-profissional />
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <x-form-pessoal />
            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <x-form-residencial />
            </div>

            {{-- <div class="row shadow-sm">
                <legend class="mb-3">Unidade Primária</legend>
                <!-- Carga Primária -->
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="unidade_primaria"
                            placeholder="Unidade (Primária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="cre_unidade_administrativa_primaria"
                            placeholder="CRE Unidade Administrativa (Primária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="lotacao_unidade_primaria"
                            placeholder="Lotação Unidade (Primária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="turno_primario" placeholder="Turno (Primário)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="atuacao_primaria"
                            placeholder="Atuação (Primária)">
                    </div>
                </div>

            </div>
            <div class="row shadow-sm">
                <legend class="mb-3">Unidade Secundária</legend>
                <!-- Carga Secundária -->
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="unidade_secundaria"
                            placeholder="Unidade (Secundária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="cre_unidade_administrativa_secundaria"
                            placeholder="CRE Unidade Administrativa (Secundária)">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="lotacao_unidade_secundaria"
                            placeholder="Lotação Unidade (Secundária)">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="turno_secundario"
                            placeholder="Turno (Secundário)">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="atuacao_secundaria"
                            placeholder="Atuação (Secundária)">
                    </div>
                </div>
            </div>
            <div class="row shadow-sm">
                <legend class="mb-3">Cadastrados no SIGRH</legend>
                <!-- Especialidades e Cursos -->
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="especialidade_disciplina_curso"
                            placeholder="Especialidade/Disciplina/Curso">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="especialidade_referencia_salarial"
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
                        <input type="text" required class="form-control" name="curso_nome" placeholder="Nome do Curso">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="curso_instituicao" placeholder="Instituição">
                    </div>
                </div>

            </div>
            <div class="row shadow-sm">
                <legend class="mb-3">Acadêmicos</legend>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="curso_data_emissao"
                            placeholder="Data de Emissão">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="curso_utilizacao"
                            placeholder="Utilização do Curso">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="curso_data" placeholder="Data de Conclusão">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" required class="form-control" name="curso_carga_horaria"
                            placeholder="Carga Horária">
                    </div>
                </div>
            </div>
            <div class="row shadow-sm">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
            </div>  --}}

        </div>
        </form>

    </div>
@endsection
