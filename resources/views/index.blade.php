<style>
    body {
        background-color: #111827;
    }

    .painel {
        margin: 0 auto;
        margin-top: 10%;
        border-radius: 5px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .menu {
        padding: 10px;
        display: flex;
        gap: 20px;
        justify-content: space-between;
        margin-top: 40px;
    }

    .pm-item {
        background-color: #111827;
        padding: 20px;
        border-radius: 5px;
    }

    .pm-item:hover {
        background-color: #E71D36;
        cursor: pointer;
    }

    .bg-bb-primary {
        background-color: #111827;
    }

    .bg-bb-secondary {
        background-color: #1f2937;
        width: 500px;
        padding: 50px;
    }

    * {
        color: #f1f1f1;
    }
</style>


<div class="d-flex bg-bb-secondary painel">
    <div class="row">
        <h2>ATHENA</h2>
    </div>
    <div class="col-12 menu">
        <a href="{{ route('forms.index') }}" class="pm-item">Formulário</a>

        <a href="" class="pm-item">Ficha Funcional</a>
    </div>
</div>
