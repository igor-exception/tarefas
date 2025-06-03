<?= view('layouts/header') ?>

    <h1>Nova Tarefa</h1>

    
    <?php if(session()->get('validation')): ?>
        <div class="alert alert-danger">
            <?= session()->get('validation')->listErrors(); ?>
        </div>
    <?php endif; ?>
    
    
    <?= form_open('/tasks/store')?>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tarefa 1" name="title" value="<?= set_value('title') ?>" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição: </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Descrição da terefa"><?= set_value('description') ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    <?= form_close()?>






    <p class="lead"><a href="<?= site_url('/tasks') ?>">← Voltar para tarefas</a></p>
<?= view('layouts/footer') ?>