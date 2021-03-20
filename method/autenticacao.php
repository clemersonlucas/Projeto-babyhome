<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //echo $email . " - " . $senha;

    include "../dao/ClienteDao.php";

    $dao = new ClienteDao();
    $autenticado = $dao->realizarLogin($email, $senha);

    if ($autenticado){
        //echo "Usuário conectado";
        header("Location: ../view/home.php");
    }
    else {
        //echo "Usuário não pode se conectar";
        header("Location: ../view/login.php?erro=400");
    }




?>