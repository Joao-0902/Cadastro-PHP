<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="frm">
            <h1>Cadastre-se</h1>
            <input type="text" name="user" id="user" placeholder="Usuário" class="inp">
            <input type="email" name="email" id="email" placeholder="Email" class="inp">
            <input type="password" name="senha" id="senha" placeholder="Senha" class="inp">
            <input type="password" name="csenha" id="csenha" placeholder="Confirmar Senha" class="inp">
            <form action="login.php" method="post" id="btn"><button class="btn btn-primary" id="btn">Cadastrar</button></form>
    </div>
</body>
</html>