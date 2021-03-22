<?php
    include "../dao/ClienteDao.php";
    include "../dao/FuncionarioDao.php";
    $clienteDao = new ClienteDao();
    $clienteDao->deslogar();
    $funcionarioDao = new FuncionarioDao();
    $funcionarioDao->deslogar();

    header("Location: ../view/index.php");
?>  