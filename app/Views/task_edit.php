<?= view('layouts/header') ?>
    <h1>Editar Tarefa</h1>

    <form action="<?= base_url('/task/update')?>" method="post">
        <input type="hidden" name="id" id="id" value="<?= esc($task['id'])?>"><br><br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tarefa 1" name="title" value="<?= esc($task['title'])?>" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição: </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Descrição da terefa"><?= esc($task['description'])?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>



    <p><a href="/tasks">← Voltar para tarefas</a></p>
<?= view('layouts/footer') ?>