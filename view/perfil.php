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
    <?php include '../include/headerPerfil.php'; ?>
    <?php include '../include/pesquisa.php'; ?>
   
    <?php 
        include '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        echo '<p id="nameCliente"> Usuário: ' . $dao->selectNomeLogado() . '</p>';
        $id = $dao->selectIdLogado();
   ?>
   
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <a class=" btn btn-outline-secondary text-center" style="margin: 10px;" href="../view/editar-perfil.php">Editar</a>
        <a class=" btn btn-outline-secondary text-center" style="margin: 10px;" href="../method/apagarConta.php?id=<?php echo $id;?>">Apagar conta</a>
        <br>
        <img style="width:20%; margin-left:40%; max-height:200px;"  src="<?php echo $dao->selectLinkLogado();?>" alt="Foto do perfil do cliente">
        <div>
            <br>
            <p class="h4 text-center">Nome do cidadão</p>
            <p class="h5 text-center"><?php echo $dao->selectNomeLogado();?></p>
            <p class="text-center" id="barra">_____________________</p>
            <p class="h4 text-center">E-mail do cidadão</p>
            <p class="h5 text-center"><?php echo $dao->selectEmailLogado();?></p>
            <p class="text-center" id="barra">_____________________</p>
            <p class="h4 text-center">Senha do cidadão</p>
            <p class="h5 text-center"><?php echo $dao->selectSenhaLogado();?></p>
            <p class="text-center" id="barra">_____________________</p>
        </div>
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>