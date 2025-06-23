<?= view('layouts/header') ?>
    <h3>Minhas Tarefas</h3>
    <?= view('layouts/alerts') ?>
    <?php if (!empty($tasks)): ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $n=>$task): ?>
                        <tr>
                            <th scope="row"><?= ($n+1) ?></th>
                            <td><?= esc($task['title']) ?></td>
                            <td><?= esc($task['description']) ?></td>
                            <td><a href="<?= site_url('/task/edit/'. esc($task['id'])) ?>" value="<?= esc($task['id'])?>" class="btn btn-warning">Editar</a>
                                <form action="<?= site_url('/task/delete/' . esc($task['id'])) ?>" method="post" style="display:inline;">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

    <?php else: ?>
        <p>Nenhuma tarefa encontrada.</p>
    <?php endif; ?>

    <p><a class="btn btn-primary" href="<?= site_url('/tasks/create') ?>">+ Nova Tarefa</a></p>

<?= view('layouts/footer') ?>