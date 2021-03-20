<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
</head>

<body>
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <br>
        <p class="h3 text-center">Informações</p>
        <form action="../view/perfil.php" class="row g-3" method="post">
            <div id="form-cadastre-se">
                <label for="validationCustom01" class="form-label">Nome</label>
                <input type="text" value="Caio" class="form-control" id="validationCustom01">
                <div class="valid-feedback">
                    Parece bom!
                </div>
            </div>
            <div id="form-cadastre-se">
                <label for="validationCustom01" class="form-label">Foto de perfil</label>
                <input type="text" value="foto-cabore.png" class="form-control" id="validationCustom01">
                <div class="invalid-feedback">
                    Por favor, insira o link acima.
                </div>
            </div>
            <div id="form-cadastre-se">
                <label for="validationCustom02" class="form-label">E-mail</label>
                <input type="email" value="caio@email.com" class="form-control" id="validationCustom02">
                <div class="invalid-feedback">
                    Por favor, insira um email.
                </div>
            </div>
            <div id="form-cadastre-se">
                <label for="validationCustom02" class="form-label">Senha</label>
                <input type="password" value="macarronada" class="form-control" id="validationCustom02">
                <div class="invalid-feedback">
                    Por favor, insira sua senha.
                </div>
            </div>
            </div>
            <div id="form-cadastre-se">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
        <br>
    </main>
</body>
    <?php include '../include/footer.php'; ?>
</html>