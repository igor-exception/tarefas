<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo, <?= session()->get('username') ?>!</h1>
    <p>Você está logado e vendo uma área restrita.</p>

    <a href="/logout">Sair</a>
</body>
</html>
