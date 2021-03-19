<?php

    include "../dao/FuncionarioDao.php";

    $nome = "Gilbran de andrade";
    $senha = "reprovar";
    $funcao = "normal";
    $email = "gilgil@gmail.com";

    $dao = new FuncionarioDao();
    //$dao->insert($nome, $senha, $email);
    //$dao->select();
    //$dao->delete(3);
    //Caio cesar|papai|normal|caio@gmail.com|1

    //$dao->update("Caio césar", "pacoca", "normal", "caio@gmail.com", 1);
    //$dao->realizarLogin ("caio@gmail.com", "pacoca");
?>