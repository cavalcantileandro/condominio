<<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhe do Condomínio</title>
</head>
<body>

<h1>{{ $condominio->nome }}</h1>
<p>{{ $condominio->email }}</p>
<p>{{ date('d/m/Y h:i', strtotime($condominio->created_at)) }}</p>

</body>
</html>>
