<?php 
    if (!(file_exists("../model/cliente_logado.db") || file_exists("../model/funcionario_logado.db"))){
        header("Location: ../view/login.php?erro=500");
    }        
?>
