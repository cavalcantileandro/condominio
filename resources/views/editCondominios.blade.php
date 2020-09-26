<<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar de Condomínios</title>
</head>
<body>

<form action="{{ route('condominios.edit', ['condominio' => $condominio->id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome do Condomínio:</label>
    <input type="text" name="nome" value="{{ $condominio->nome }}">

    <label for="">E-mail do Condomínio:</label>
    <input type="email" name="email" value="{{ $condominio->email }}">

    <input type="submit" value="Editar Condominio">
</form>

</body>
</html>
