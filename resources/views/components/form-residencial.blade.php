<form action="{{ route('prof.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf()
    <div class="row shadow-sm">
        <legend class="mb-3"> <span class="number"> 3 </span> Dados Residencias </legend></legend>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="estado_id" placeholder="Estado">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="endereco" placeholder="Endereço">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="bairro" placeholder="Bairro">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="cidade" placeholder="Cidade">
            </div>
        </div>


        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="uf_residencia" placeholder="UF de Residência">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="cep" placeholder="CEP">
            </div>
        </div>

        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="telefone_residencial"
                    placeholder="Telefone Residencial">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group ">
                <input type="text" required class="form-control" name="telefone_celular"
                    placeholder="Telefone Celular">
            </div>
        </div>


        <div class="col-3">
            <div class="input-group">
                <input type="text" required class="form-control" name="telefone_comercial"
                    placeholder="Telefone Comercial">
            </div>
        </div>

    </div>
</form>
