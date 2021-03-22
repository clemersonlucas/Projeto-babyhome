<?php 
    if (!(file_exists("../model/cliente_logado.db"))){
        header("Location: ../view/login.php?erro=500");
    }        
?>
