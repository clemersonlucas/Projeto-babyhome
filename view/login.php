<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
</head>

<body>
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <p class="text-center h3" id="acesse">Acesse a sua conta</p>
        <form action="../view/home.php" method="post" class="needs-validation" id="form-cadastro">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail de acesso</label>
                <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nunca compartilhe seu e-mail com ninguém.</div>
                <div class="invalid-feedback">
                    Por favor, insira seu email.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" required class="form-control" id="exampleInputPassword1">
                <div class="invalid-feedback">
                    Por favor, insira sua senha.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <div id="cadastre-se">
            <p>Não tem uma conta? 
                <a href="../view/cadastro.php">Cadastre-se</a>
            </p>
        </div>
    </main>
</body>
<?php include '../include/footer.php'; ?>

</html>