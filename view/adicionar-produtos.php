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
</head>

<body>
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <br>
        <p class="h3 text-center">Adicione seus produtos e participe da nossa família</p>
        <form action="../method/adicionaProduto.php" class="row g-3 needs-validation" method="post">
            <div id="form-cadastre-se">
                <label for="validationCustom01" class="form-label">Nome do produto</label>
                <input name="nome" type="text" class="form-control" id="validationCustom01" required placeholder="Insira o nome aqui">
                <div class="valid-feedback">
                    Parece bom!
                </div>
            </div>
            <div id="form-cadastre-se">
                <label for="validationCustom01" class="form-label">Link da imagem</label>
                <input name="link" type="text" class="form-control" id="validationCustom01" required placeholder="https://...">
                <div class="invalid-feedback">
                    Por favor, insira o link da imagem do produto.
                </div>
            </div>
            <div id="form-cadastre-se">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição do produto</label>
                <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div id="form-cadastre-se">
                <label for="validationCustom02" class="form-label">Valor(R$) </label>
                <input name="valor" type="number" class="form-control" value="0" id="validationCustom02" placeholder="Valor do produto" required>
            </div>
            <div id="form-cadastre-se">
                <label for="validationCustom02" class="form-label">Quantidade de produtos</label>
                <input name="quantidade" type="text" class="form-control" id="validationCustom02" placeholder="Insira o número de unidades" required>
                <div class="invalid-feedback">
                    Por favor, insira um número.
                </div>
            </div>
            <div id="form-cadastre-se">
                <button class="btn btn-primary" type="submit">Adicionar</button>
            </div>
        </form>
        <br>
    </main>
</body>
    <?php include '../include/footer.php'; ?>
</html>