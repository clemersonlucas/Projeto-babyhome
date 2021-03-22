<?php 
    include '../method/acess.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
</head>

<body>
    <?php include 'header-funcionario.php'; ?>
    <?php include '../include/pesquisa.php'; ?>
  
    <?php 
        include '../dao/FuncionarioDao.php';
        $dao = new FuncionarioDao();
        echo '<p id="nameCliente"> Administrador: ' . $dao->selectNomeLogado() . '</p>';
    ?>


    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <?php 
            if (!isset($_GET['admin'])){
                include '../include/cards.php';
            }
            else {
                echo '<br>
                    <p class="h3 text-center">Anúncios recentes</p> 
                <br>';
                include '../dao/ProdutoDao.php';
                $produto = new ProdutoDao();
                $produto->showProdutosAdmin();
            }
        ?>
    </main>
</body>
<?php include '../include/footer.php'; ?>

</html>