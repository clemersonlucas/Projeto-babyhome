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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <br>
        <p class="h3 text-center">Feedback</p>
        <br>
        <p class="text-center">Envie-nos uma mensagem como forma de agradecimento ou reclamação,
            assim poderemos melhorar cada vez mais e trazer a você o melhor serviço possível.</p>
        <form id="form-cadastro">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu nome aqui">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deixe-nos uma mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
</body>
<?php include '../include/footer.php' ?>

</html>