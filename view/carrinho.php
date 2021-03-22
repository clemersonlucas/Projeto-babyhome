<?php 
    include '../method/acess.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
    <link href="../css/carrinho.css" rel="stylesheet">
</head>

<body>
    <?php include '../include/headerCarrinho.php'; ?>
    <?php include '../include/pesquisa.php'; ?>

    
    <?php 
        include '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        echo '<p id="nameCliente"> Usuário: ' . $dao->selectNomeLogado() . '</p>';
    ?>
   
    <main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <section>
            <p class="h3 text-start" id="mc">Meu carrinho</p>
            <div>
                <button type="button" class="btn-close" aria-label="Close"></button>
                <div>
                        <img src="../img/carrinho.jpg">
                        <p class="h5" id="produto">Carrinho de bebê</p>
                            <p>Vendido e entregue por Caio César</p>
                            <P>Detalhes do produto, tamanho, cor e modelo.</p>
                </div>
                <p class="text-center" id="barra">____________________________</p>
                <div id="qtd-div">
                    <p id="qtd-p">Quantidade <input id="qtd-label" type="text">
                        <b>
                            <p id="preco" class="text-end">R$100</p>
                        </b>
                    </p>
                </div>
            </div>
        </section>
        <section id="s2">
            <div id="resumo">
                <p class="h3 text-start" id="meu-carrinho">Resumo da compra</p>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div>
                            <p class="text-start">Subtotal</p>
                            <b><p class="text-end">xxx</p></b>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <p class="text-start">Descontos</p>
                            <b><p class="text-end">xxx</p></b>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <p class="text-start">Valor total</p>
                            <b><p class="text-end">xxx</p></b>
                        </div>
                    </li>
                    <li>
                        <div>
                            <p class="text-center"><a class="btn btn-warning" type="submit">Comprar</a></p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <p class="text-center"><a class="btn btn-outline-success" type="submit">Escolher mais produtos</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>