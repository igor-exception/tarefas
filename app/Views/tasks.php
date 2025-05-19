<!DOCTYPE html>
<html>
<head>
    <title>Minhas Tarefas</title>
</head>
<body>
    <h1>Minhas Tarefas</h1>

    <?php if (!empty($tasks)): ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li><strong><?= esc($task['title']) ?></strong> - <?= esc($task['description']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhuma tarefa encontrada.</p>
    <?php endif; ?>

    <p><a href="/tasks/create">+ Nova Tarefa</a></p>

</body>
</html>
