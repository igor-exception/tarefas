<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema de Tarefas</title>
</head>
<body>
    <div class="container mt-4">
        <header class="mb-4">
            <h2>Sistema de Tarefas</h2>
            <nav class="mb-2">
                <a href="<?= site_url('dashboard') ?>" class="btn btn-sm btn-outline-primary">Dashboard</a>
                <a href="<?= site_url('tasks') ?>" class="btn btn-sm btn-outline-primary">Minhas Tarefas</a>
                <a href="<?= site_url('/tasks/create') ?>" class="btn btn-sm btn-outline-success">Nova Tarefa</a>
                <a href="<?= site_url('/logout') ?>" class="btn btn-sm btn-outline-danger">Sair</a>
            </nav>
            <hr>
        </header>
