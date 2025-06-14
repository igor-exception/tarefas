<?= view('layouts/header') ?>
    <h1>Bem-vindo, <?= esc(session()->get('username')) ?>!</h1>

    <div class="card" style="width: 18rem;">
    <div class="card-header">
        O que deseja fazer?
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="<?= site_url('tasks') ?>">Ver minhas tarefas</a></li>
        <li class="list-group-item"><a href="<?= site_url('/tasks/create') ?>">Criar nova tarefa</a></li>
        <li class="list-group-item"><a href="<?= site_url('/logout') ?>">Sair</a></li>
    </ul>
    </div>
<?= view('layouts/footer') ?>