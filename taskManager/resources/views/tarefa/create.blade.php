<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Criar tarefa</h1>

    <form action="{{ route('tarefa.salvar') }}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="text" name="descricao">
        <button type="submit">Enviar</button>
    </form>

    <a href="{{ route('tarefa.início') }}">Voltar</a>

</body>
</html>