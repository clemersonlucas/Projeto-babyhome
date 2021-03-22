<?php

    include '../dao/ProdutoDao.php';
    include '../dao/ClienteDao.php';

    $nome = $_POST["nome"];
    $link = $_POST["link"];
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];

    $clienteDao = new ClienteDao();
    $produtoDao = new ProdutoDao();


    $idFuncionario = $clienteDao->selectNomeLogado();
    $id = $produtoDao->gerarID();
    $produtoDao->insert($nome, $valor, $quantidade, $link, $descricao, $idFuncionario, $id);    

    header("Location: ../view/home.php");

?>