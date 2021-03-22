<?php
    include '../dao/ClienteDao.php';

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $link = $_POST["link"];
    $email = $_POST["email"];


    //echo $nome . " - " . $senha . " - " . $link . " - " . $email;

    
    $clienteDao = new ClienteDao();
    $id = $clienteDao->selectIdLogado();
    $clienteDao->deslogar();    
    $clienteDao->logar($nome, $senha, $link, $email, $id); // dados salvos ao logar
    $clienteDao->update($nome, $senha, $link, $email, $id);// alterar dados do banco 

    header("Location: ../view/home.php");

?>