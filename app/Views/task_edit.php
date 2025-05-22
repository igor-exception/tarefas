<?= view('layouts/header') ?>
    <h1>Editar Tarefa</h1>

    <form action="<?= base_url('/task/update')?>" method="post">
        <input type="hidden" name="id" id="id" value="<?= esc($task['id'])?>"><br><br>
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="<?= esc($task['title'])?>" required><br><br>

        <label for="description">Descrição:</label><br>
        <textarea name="description" id="description"><?= esc($task['description'])?></textarea><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <p><a href="/tasks">← Voltar para tarefas</a></p>
<?= view('layouts/footer') ?>