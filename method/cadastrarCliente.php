<?php

    include '../dao/ClienteDao.php';
    $clienteDao = new ClienteDao();

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $link = $_POST['link'];
    $email = $_POST['email'];

    $clienteDao->insert($nome, $senha, $link, $email);
    header ('Location: ../view/login.php');

?>