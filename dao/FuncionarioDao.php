<?php
    class FuncionarioDao{


        //metodos extra
        public function logar ($nome, $senha, $link, $email, $id){
            $delimitador = "|";
            $banco = fopen("../model/funcionario_logado.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha .  $delimitador . $link .  $delimitador 
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
                $idBanco = explode("|", $r)[4]; 
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
                $idBanco = explode("|", $r)[4]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[1];        
                }                    
            }  
            return null;
        } 

        public function selectLink ($id){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                //echo explode("|", $r)[3] . " - " . explode("|", $r)[1] . "<br>";
                $idBanco = explode("|", $r)[4]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[2];        
                }                    
            }  
            return null;
        } 



        public function selectEmail ($id){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                //echo explode("|", $r)[3] . " - " . explode("|", $r)[1] . "<br>";
                $idBanco = explode("|", $r)[4]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[3];        
                }                    
            }  
            return null;
        } 





        public function getId ($email, $senha){
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                //echo explode("|", $r)[2] . " - " . explode("|", $r)[1] . "<br>";   
                if (explode("|", $r)[3] == $email){
                    if (explode("|", $r)[1] == $senha){
                        //echo "Usuario autenticado";
                        $id = explode("|", $r)[4];
                        return $id;
                        
                    }
                }                      
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
    
        public function delete ($id){
            $linha = 0;
            $encontrou = false;
            $result = file("../model/funcionario.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[3] == $id){
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
            $this->delete($id);
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
                if(explode("|", $r)[3] == $email){
                    if (explode("|", $r)[1] == $senha){
                        //echo "Usuario autenticado";
                        return true;
                    }
                }                    
            }
            return false;
        }    

        public function gerarID (){
            return "0";
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