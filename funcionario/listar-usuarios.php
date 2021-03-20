<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
</head>

<body>
    <?php include '../funcionario/header-funcionario.php'; ?>
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <br>
        <p class="h3 text-center">Perfil</p>
        <br>
        <img src="../img/preto.png" alt="Cliente">
        <div>
            <br>
            <p class="h4 text-center">Nome do cidadão</p>
            <p class="h5 text-center">Caio César Penha Dantas</p>
            <p class="text-center" id="barra">_____________________</p>
            <p class="h4 text-center">E-mail do cidadão</p>
            <p class="h5 text-center">caio@email.com</p>
            <p class="text-center" id="barra">_____________________</p>
            <p class="h4 text-center">Senha do cidadão</p>
            <p class="h5 text-center">macarronada</p>
            <p class="text-center" id="barra">_____________________</p>
            <a class=" btn btn-outline-primary text-center" style="margin-left: 46.8%; width: 80px" href="../view/editar-perfil.php">Deletar</a>
        </div>
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>