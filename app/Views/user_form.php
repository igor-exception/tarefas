<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h1>Cadastrar Novo Usuário</h1>

    <?php if (session()->getFlashdata('message')): ?>
        <p style="color: green;"><?= session()->getFlashdata('message') ?></p>
    <?php endif; ?>

    <form method="post" action="/user/store">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
