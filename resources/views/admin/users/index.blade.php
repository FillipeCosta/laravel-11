<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>

    <h1>Usuários</h1>
    <p> Temos um total de {{ $users->count() }} registros</p>

    <a href="{{ route('users.create') }}">Adicionar novo</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum registro encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
    {{-- links() é um método que cria a paginação --}}


</body>

</html>

{{-- @forelse é um comando que permite mostrar uma espécie de else quando o array estiver vazio --}}
