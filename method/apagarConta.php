<?php
    include '../dao/ClienteDao.php';
    $id = $_GET['id']; 
    $clienteDao = new ClienteDao();
    
    $nome = $clienteDao->selectNomeLogado();
    $clienteDao->delete($nome);
    $clienteDao->deslogar();

    header("Location: ../view/login.php");
?>