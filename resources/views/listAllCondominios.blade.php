<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Condomínios</title>
</head>
<body>

<table>

    <tr>
        <td>#ID</td>
        <td>Nome:</td>
        <td>E-mail:</td>
        <td>Ações:</td>
    </tr>

    @foreach($condominios as $condominio)
        <tr>
            <td>{{ $condominio->id }}</td>
            <td>{{ $condominio->nome }}</td>
            <td>{{ $condominio->email }}</td>
            <td>
                <a href="">Ver Condomínio</a>
                <form action="{{ route('condominio.destroy', ['condominio' => $condominio->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="condominio" value="{{ $condominio->id }}">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
