<!DOCTYPE html>
<html>
<head>
    <title>Nova Tarefa</title>
</head>
<body>
    <h1>Nova Tarefa</h1>

    <form action="/tasks/store" method="post">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="description">Descrição:</label><br>
        <textarea name="description" id="description"></textarea><br><br>

        <button type="submit">Salvar</button>
    </form>

    <p><a href="/tasks">← Voltar para tarefas</a></p>
</body>
</html>
