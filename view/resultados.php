<?php 
    include '../method/acess.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adicional.css">
</head>

<body>
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <br>
            <p class="h3 text-center">Resultados</p> 
        <br>

        <?php
            include "../dao/ProdutoDao.php";
            $produto = $_GET['pesquisa'];
            $produtoDao = new ProdutoDao();
            $produtoDao->showProdutosPesquisados($produto);
        ?>

  
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>