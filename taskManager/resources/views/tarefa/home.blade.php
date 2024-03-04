<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Página inicial - Tarefas - {{ $nome }}</h1>

    <a href="{{ route('tarefa.criar') }}"><button>Criar tarefa</button></a>

</body>
</html>