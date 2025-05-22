<?= view('layouts/header') ?>
    <h1>Cadastrar Novo Usuário</h1>

    <?= view('layouts/alerts') ?>

    <form method="post" action="/user/store">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
<?= view('layouts/footer') ?>