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
        $id = $clienteDao->getId($email, $senha);
        $nome = $clienteDao->selectNome($id);
        $link = $clienteDao->selectLink($id);
        $clienteDao->logar($nome, $senha, $link, $email, $id);
        header("Location: ../view/home.php");
    }
    else if ($funcionarioDao->realizarLogin($email, $senha)){
        //echo "funcionario conectado";
        $id = $funcionarioDao->getId($email, $senha);
        $nome = $funcionarioDao->selectNome($id);
        $link = $funcionarioDao->selectLink($id);

        $funcionarioDao->logar($nome, $senha, $link, $email, $id);
        header("Location: ../view-funcionario/home.php");
    }

    else {
        //echo "Usuário não pode se conectar";
        header("Location: ../view/login.php?erro=400");
    }

?>