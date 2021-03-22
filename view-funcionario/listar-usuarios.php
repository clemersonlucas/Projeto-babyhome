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
    <?php include 'header-funcionario-usuarios.php'; ?>
    <?php include '../include/pesquisa.php'; ?>
  
    <?php 
        include '../dao/FuncionarioDao.php';
        $dao = new FuncionarioDao();
        echo '<p id="nameCliente"> Administrador: ' . $dao->selectNomeLogado() . '</p>';
    ?>

    <br>
        <p class="h3 text-center">Clientes cadastrados no sistema</p>
    <br>
    <br>
    <main>
        <?php
            include "../dao/ClienteDao.php";
            $dao = new ClienteDao();
            $dao->showClientes();
        ?>
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>