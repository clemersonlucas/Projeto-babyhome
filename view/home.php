<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/adicional.css" rel="stylesheet">
</head>

<body>
    <?php include '../include/header.php'; ?>
    <?php include '../include/pesquisa.php'; ?>
   
    <?php 
        include '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        echo '<p id="nameCliente"> Usuário: ' . $dao->selectNomeLogado() . '</p>';
    ?>
   
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <?php include '../include/cards.php'; ?>
    </main>
</body>
<?php include '../include/footer.php'; ?>

</html>

<?php
    /*
    session_start();
    if(isset($_SESSION["mensagem"])){
                                echo $_SESSION["mensagem"];
                                unset($_SESSION["mensagem"]);
                            }
                            require_once dirname(__FILE__) . '/model/usuario.php';

    $file = fopen("bd/usuario.bd", "r");

    $users = ""; //string dos arquivos
    $linhaCerta = ""; //linha que contem a senha e o email do user
    $userEmail = $_POST["login-email"]; //email do input
    $userSenha = $_POST["login-senha"]; //senha do input
    $autenticacao = false;//variavel de autenticacao

    while(! feof($file)) {//criação da string que contem os users

        $line = fgets($file);
        $users = $users . $line . "<br>";

        if(str_contains($line , $userEmail)){
            $linhaCerta = $line;//obtencao do email e senha salvas do arquivo
        }
    }
    fclose($file);

    $array = explode("|" , $linhaCerta);
    $senhaBD = $array[1];//senha salva no bd

    session_start();
    $loginOk=true;

    if( str_contains( $users , $userEmail ) ){
        if($userSenha == $senhaBD){
            $autenticacao = true;
        }
        else{
            $_SESSION["mensagem"]="Senha inválida!";
            $loginOk=false;
            //header("Location: index.php?msg=Senha inválida!");
        }
    }
    else{
        $_SESSION["mensagem"]="Usuário não encontrado!";
        $loginOk=false;
        //header("Location: index.php?msg=Usuário não encontrado!");
    }  
    if(!$loginOk){
        header("Location: index.php");
    }

    $_SESSION["usuario"]=$_POST["login-email"];
?>

<?php
    session_start();

    unset($_SESSION["usuario"]);

    header("Location: index.php");
    



    if(! isset($_SESSION["usuario"])){
        $_SESSION["mensagem"]="Faça login para acesar a página!";
        header("Location: index.php");
    }
*/
?>