<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?= esc(session()->get('username')) ?>!</h1>

    <ul>
        <li><a href="/tasks">Ver minhas tarefas</a></li>
        <li><a href="/tasks/create">Criar nova tarefa</a></li>
        <li><a href="/logout">Sair</a></li>
    </ul>
</body>
</html>
