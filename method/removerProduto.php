<?php
    include '../dao/ProdutoDao.php';
    
    $nome = $_GET['nomeProduto'];
    
    $produtoDao = new ProdutoDao();
    $produtoDao->delete($nome);


    if (!isset($_GET['admin'])){
        header("Location: ../view/meus-anuncios.php");
    }
    else {
        header("Location: ../view-funcionario/home.php?admin=admin");

    }

    
?>