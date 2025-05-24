<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema de Tarefas</title>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">

        <div class="text-center mb-4">
            <h1 class="display-6">Sistema de Tarefas</h1>
            <p class="lead">Para prosseguir, faça login.<br>Caso não tenha conta, <a href="<?= base_url('user/form') ?>">clique aqui</a>
 para criar.</p>
        </div>

        <div class="col-md-4">
            
            <?php if (session()->getFlashdata('validation')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('validation')->listErrors()?>
                </div>
            <?php endif; ?>
            <?= view('layouts/alerts') ?>


            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center mb-4">Login</h4>

                    
                    <?= form_open('/login')?>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>

            <p class="text-center mt-4 text-muted">&copy; <?= date('Y') ?> - Desenvolvido por Igor</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
