<br>
    <p class="h3 text-center">Anúncios recentes</p> 
<br>

<?php

    include '../dao/ProdutoDao.php';
    $produto = new ProdutoDao();
    $produto->showProdutos();
?>
