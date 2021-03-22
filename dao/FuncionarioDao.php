<?php
    class FuncionarioDao{


        //metodos extra
        public function logar ($nome, $senha, $email, $id){
            $delimitador = "|";
            $banco = fopen("../model/funcionario_logado.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha . $delimitador 
                    . $email . $delimitador . $id);
            fclose ($banco);
        }

        public function deslogar (){
            unlink("../model/funcionario_logado.db");
        }

        // pegar dados com id
        public function selectNome ($id){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                $idBanco = explode("|", $r)[3]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[0];        
                }                    
            }  
            return null;
        } 

        public function selectSenha ($id){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                //echo explode("|", $r)[3] . " - " . explode("|", $r)[1] . "<br>";
                $idBanco = explode("|", $r)[3]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[1];        
                }                    
            }  
            return null;
        } 


        public function selectEmail ($id){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                //echo explode("|", $r)[3] . " - " . explode("|", $r)[1] . "<br>";
                $idBanco = explode("|", $r)[3]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[2];        
                }                    
            }  
            return null;
        } 





        public function getId ($email, $senha){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                if (explode("|", $r)[2] == $email){
                    if (explode("|", $r)[1] == $senha){
                        $id = explode("|", $r)[3];
                        return $id;
                        
                    }
                }                      
            }  
            return null;
        }     






        public function selectNomeLogado (){
            $result = file("../model/funcionario_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[0];        
            }  
            return null;
        } 
        public function selectSenhaLogado (){
            $result = file("../model/funcionario_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[1];        
            }  
            return null;
        } 
        public function selectEmailLogado (){
            $result = file("../model/funcionario_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[3];        
            }  
            return null;
        } 
        public function selectIdLogado (){
            $result = file("../model/funcionario_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[4];        
            }  
            return null;
        } 












    
        public function select (){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                echo explode("|", $r)[0] . " - "; 
                echo explode("|", $r)[1] . " - ";
                echo explode("|", $r)[2] . " - ";
                echo explode("|", $r)[3];
                echo "<br>";
            }
        } 
    
        public function delete ($nome){
            $linha = 0;
            $encontrou = false;
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[0] == $nome){
                    $encontrou = true;
                    $linha = $index;
                }
            }

            if ($encontrou){
                $dados = file("../model/funcionario.db");
                unset($dados[$linha]);
                file_put_contents("../model/funcionario.db", $dados);    
            }
        }

        public function update ($nome, $senha, $email, $id){
            $this->delete($nome);
            $this->insertJaCadastrado($nome, $senha, $email, $id);
        }

        public function insert ($nome, $senha, $email){    
            $delimitador = "|";
            $banco = fopen("../model/funcionario.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha .  $delimitador 
                    . $email . $delimitador . $this->gerarID() . "\n");
            fclose ($banco);
        }

        //more
        public function realizarLogin ($email, $senha){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[2   ] == $email){
                    if (explode("|", $r)[1] == $senha){
                        //echo "Usuario autenticado";
                        return true;
                    }
                }                    
            }
            return false;
        }    

        public function gerarID (){
            $cont = 0;
            $result = file("../model/funcionario.db");
            foreach ($result as $index) {
               $cont = $cont + 1;
            }
            return $cont;
        }


        public function insertJaCadastrado ($nome, $senha, $funcao, $email, $id){    
            $delimitador = "|";
            $banco = fopen("../model/funcionario.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha .  $delimitador 
                    . $email . $delimitador . $id . "\n");
            fclose ($banco);
        }


    }
?>