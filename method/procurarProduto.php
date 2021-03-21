<?php
    include '../dao/ProdutoDao.php';
    
    $produto = $_GET['nome_produto'];
    header("Location: ../view/resultados.php?pesquisa=" . $produto);
?>