<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
</head>

<body>
    <?php include '../include/header.php'; ?>
    <?php include '../include/pesquisa.php'; ?>
    <main>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <a class=" btn btn-outline-secondary text-center" style="margin: 10px;" href="../view/adicionar-produtos.php">Adicionar produtos</a>
        <br>
        <p class="h3 text-center">Seus anúncios</p>
        <br>

        <?php
            include '../dao/ProdutoDao.php';
            include '../dao/ClienteDao.php';
            $clienteDao = new ClienteDao();
            $produtoDao = new ProdutoDao();
            $id = $clienteDao->selectIdLogado();
            $produtoDao->showMeusProdutos($id);
        ?>

    </main>
</body>
<?php include '../include/footer.php'; ?>

</html>