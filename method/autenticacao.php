<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //echo $email . " - " . $senha;

    include "../dao/ClienteDao.php";
    include "../dao/FuncionarioDao.php";


    // cliente
    $clienteDao = new ClienteDao();
    // funcionario
    $funcionarioDao = new FuncionarioDao();



    if ($clienteDao->realizarLogin($email, $senha)){
        //echo "Usuário conectado";
        header("Location: ../view/home.php");
    }
    else if ($funcionarioDao->realizarLogin($email, $senha)){
        //echo "funcionario conectado";
        header("Location: ../view/home.php");
    }
    else {
        //echo "Usuário não pode se conectar";
        header("Location: ../view/login.php?erro=400");
    }




?>