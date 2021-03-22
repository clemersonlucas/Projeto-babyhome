<?php
    include "../dao/ClienteDao.php";
    $clienteDao = new ClienteDao();
    $clienteDao->deslogar();

    header("Location: ../view/index.php");
?>  