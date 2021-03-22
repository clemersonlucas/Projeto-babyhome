<?php
    include '../dao/ClienteDao.php';
    $clienteDao = new ClienteDao();
    $nome = $_GET["nome"];
    $clienteDao->deleteForName($nome);
    header("Location: ../view-funcionario/listar-usuarios.php");
?>