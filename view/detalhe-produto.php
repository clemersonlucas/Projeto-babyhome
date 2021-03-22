<?php
    include "../dao/ProdutoDao.php";

    $nomeFornecedor = $_GET['fornecedor'];
    $nomeProduto = $_GET['produto'];
    $produtoDao = new ProdutoDao();
        

    if (isset($nomeFornecedor)){
        $nome = $produtoDao->selectProdutoNome($nomeProduto, $nomeFornecedor);
        $quantidade = $produtoDao->selectProdutoQuantidade($nomeProduto, $nomeFornecedor);
        $link = $produtoDao->selectProdutoLink($nomeProduto, $nomeFornecedor);
        $descricao = $produtoDao->selectProdutoDescricao($nomeProduto, $nomeFornecedor);
        $valor = $produtoDao->selectProdutoValor($nomeProduto, $nomeFornecedor);
    }

    else {
        $nome = $produtoDao->selectProdutoNome($nomeProduto, null);
        $quantidade = $produtoDao->selectProdutoQuantidade($nomeProduto, null);
        $link = $produtoDao->selectProdutoLink($nomeProduto, null);
        $descricao = $produtoDao->selectProdutoDescricao($nomeProduto, null);
        $valor = $produtoDao->selectProdutoValor($nomeProduto, null);
    }

    //echo $nomeProduto . " - " . $nomeFornecedor . "<br>";     
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
</head>
<!-- pegar o id do produto para adicionar no carrinho-->

<body>
    <?php include '../include/header.php'; ?>
    <?php include '../include/pesquisa.php'; ?>

    <?php 
        include '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        echo '<p id="nameCliente"> Usuário: ' . $dao->selectNomeLogado() . '</p>';
    
        // vamos verificar se pode alterar o produto
        if (isset($_GET["fornecedor"])){ 
            if ($dao->selectNomeLogado() == $nomeFornecedor){    
                echo "<a class='btn btn-outline-secondary text-center' style='margin: 10px;' href='../view/editar-produto.php?produto=$nomeProduto&fornecedor=$nomeFornecedor'>Alterar produto</a>";
            }
        }

    ?>
        
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <br>
        <p class="h3 text-center"><?php echo $nome;?></p>
        <br>
        <img src="<?php echo $link;?>" alt="Produto">
        <div>
            <br>
            <p class="h4 text-center">Descrição</p>
            <p class="h5 text-center"><?php echo $descricao;?></p>
            <p class="text-center" id="barra">_____________________</p>
            <p class="h4 text-center">Valor: <?php echo "R$ " . $valor;?>,00</p>
            <p class="text-center" id="barra">_____________________</p>
            <p class="h4 text-center">Quantidade</p>
            <p class="h5 text-center"><?php echo $quantidade;?></p>
            <p class="text-center" id="barra">_____________________</p>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
         
          <!--  <p class="text-center" id="barra">_____________________</p>
            <p class="h4 text-center">Localização</p>
            <p class="h5 text-center">Localização</p>
            <p class="text-center" id="barra">_____________________</p>
        </div>
        <p class="h4 text-center">Aprovação</p>
        <div class="progress" id="progresso">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <p class="text-center" id="barra">_____________________</p>
        <p class="h4 text-center">Comentários</p>
        <div>
            <p class="h5 text-center">Nome do comentarista: Comentário</p>
        </div>
        <div>
            <p class="h5 text-center">Nome do comentarista: Comentário</p>
        </div>
        <div>
            <p class="h5 text-center">Nome do comentarista: Comentário</p>
        </div>
        <p class="text-center" id="barra">_____________________</p>
        <form action="../view/carrinho.php">
            <div>
                <button class="btn btn-primary" type="submit" id="adicionar">Adicionar ao carrinho</button>
            </div>
        </form>
        <p class="text-center" id="barra">_____________________</p>-->
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>