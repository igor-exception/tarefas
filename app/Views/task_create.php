<?= view('layouts/header') ?>

    <h1>Nova Tarefa</h1>

    <form action="<?= base_url('/tasks/store')?>" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tarefa 1" name="title" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição: </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Descrição da terefa"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>






    <p class="lead"><a href="/tasks">← Voltar para tarefas</a></p>
<?= view('layouts/footer') ?>