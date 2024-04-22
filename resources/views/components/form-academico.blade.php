<form action="{{ route('prof.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf()
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
    </div>
</form>
