<?php
    include '../dao/ProdutoDao.php';
    
    $nome = $_GET['nomeProduto'];
    
    $produtoDao = new ProdutoDao();
    $produtoDao->delete($nome);

    header("Location: ../view/meus-anuncios.php");

?>