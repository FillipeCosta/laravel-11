<form action="{{ route('prof.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf()
    <div class="row shadow-sm">
        <legend class="mb-3"> <span class="number"> 2 </span> Dados Pessoais </legend>
        <hr>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="data_nascimento"
                    placeholder="Data de Nascimento">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="sexo" placeholder="Sexo">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="cor_raca" placeholder="Cor/Raça">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="nacionalidade" placeholder="Nacionalidade">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="uf_naturalidade"
                    placeholder="UF de Naturalidade">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="naturalidade" placeholder="Naturalidade">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="ci_numero" placeholder="Número do RG">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="ci_orgao_emissor"
                    placeholder="Órgão Emissor do RG">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="ci_uf" placeholder="UF do RG">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="ci_data_emissao"
                    placeholder="Data de Emissão do RG">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="cpf" placeholder="CPF">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="pis_pasep" placeholder="PIS/PASEP">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="titulo_eleitoral_numero"
                    placeholder="Título de Eleitor">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="zona_eleitoral" placeholder="Zona Eleitoral">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="secao_eleitoral"
                    placeholder="Seção Eleitoral">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="estado_civil" placeholder="Estado Civil">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="nome_conjuge"
                    placeholder="Nome do Cônjuge">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="nome_pai" placeholder="Nome do Pai">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="nome_mae" placeholder="Nome da Mãe">
            </div>
        </div>
    </form>
