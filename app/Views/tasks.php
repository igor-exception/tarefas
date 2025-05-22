<!DOCTYPE html>
<html>
<head>
    <title>Minhas Tarefas</title>
</head>
<body>
    <h1>Minhas Tarefas</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message')): ?>
        <p style="color: green;"><?= session()->getFlashdata('message') ?></p>
    <?php endif; ?>
    <?php if (!empty($tasks)): ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li><strong><?= esc($task['title']) ?></strong> - <?= esc($task['description']) ?> <a href="/task/edit/<?= esc($task['id'])?>" value="<?= esc($task['id'])?>">Editar</a></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhuma tarefa encontrada.</p>
    <?php endif; ?>

    <p><a href="/tasks/create">+ Nova Tarefa</a></p>

</body>
</html>
