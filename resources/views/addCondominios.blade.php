<<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Condomínios</title>
</head>
<body>

<form action="{{ route('condominios.store') }}" method="post">
    @csrf
    <label for="">Nome do Condomínio:</label>
    <input type="text" name="nome">

    <label for="">E-mail do Condomínio:</label>
    <input type="email" name="email">

    <label for="">Quantidade de Blocos:</label>
    <input type="text" name="numero">

    <label for="">Quantidade de Apartamentos:</label>
    <input type="text" name="quantidade_ap">

    <input type="submit" value="Cadastrar Condomínio">
</form>

</body>
</html>
