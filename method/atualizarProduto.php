<?php
    include '../dao/ProdutoDao.php';

    $nome = $_POST["nome"];
    $link = $_POST["link"];
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];
  
    $id = $_GET['id'];
    $fornecedor = $_GET['fornecedor'];
    

    $produtoDao = new ProdutoDao();
    $produtoDao->update($nome, $valor, $quantidade, $link, $descricao,$fornecedor, $id);
    header("Location: ../view/meus-anuncios.php");
?>