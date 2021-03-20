<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adicional.css">
</head>

<body>
    <main>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <p class="h3 text-center">Pesquisa</p>
        <br>
        <form action="../view/resultados.php" id="form-cadastro" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Insira aqui o que procura</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Produto x">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <br>
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>