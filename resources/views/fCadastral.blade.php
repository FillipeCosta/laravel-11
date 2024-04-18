<h1>Ficha Cadastral</h1>


<form action="{{ route('ficha.store') }}" method="POST">
    @csrf()

    <input type="hidden" name="idCidade">
    <input type="text" name="idEstado" placeholder="Estado">
    <input type="text" name="nome" placeholder="Nome">

    <input type="submit">
</form>
