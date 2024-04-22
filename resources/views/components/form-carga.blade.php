<form action="{{ route('prof.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf()
    <div class="row shadow-sm">
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
                <input type="text" required class="form-control" name="turno_primario"
                    placeholder="Turno (Primário)">
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
</form>
