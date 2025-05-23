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
            <p class="lead">Para prosseguir, crie uma conta.<br>Caso já tenha, faça login clicando <a href="<?= base_url('login') ?>">clique aqui</a></p>
        </div>

        <div class="col-md-6">
            <?= view('layouts/alerts') ?>

            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center mb-6">Criar nova conta</h4>

                    <form action="<?= base_url('/user/store')?>" method="post">
                        <div class="mb-3">
                            <label for="UsernameControlInput1" class="form-label">Username: </label>
                            <input type="text" class="form-control" id="UsernameControlInput1" placeholder="John Doe" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailFormControl1" class="form-label">Email: </label>
                            <input type="email" class="form-control" id="emailFormControl1" rows="3" name="email" placeholder="john.doe@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
