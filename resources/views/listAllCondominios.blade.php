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

<table style="border: 1px solid black;">

    <tr>
        <td>#ID</td>
        <td>Nome:</td>
        <td>E-mail:</td>
        <td>Número de Blocos:</td>
        <td>Blocos</td>
        <td>Ações:</td>
    </tr>

    @foreach($condominios as $condominio)

        <tr>
            <td>{{ $condominio->id }}</td>
            <td>{{ $condominio->nome }}</td>
            <td>{{ $condominio->email }}</td>
            <td>{{ count($condominio->blocos)}}</td>
            <td>

             <table style="border: 1px solid black;">

                 <tr>
                     <td>Numero do Bloco</td>
                     <td>Quantidade de Apartamentos</td>
                 </tr>

                 @foreach($condominio->blocos as $bloco)

                     <tr>

                         <td>{{ $bloco->numero }}</td>
                         <td>{{ $bloco->quantidade_ap }}</td>

                     </tr>

                 @endforeach
             </table>

            </td>
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
