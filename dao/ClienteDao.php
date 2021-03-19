<?php

    class ClienteDao{
        public function select (){
            $result = file("../model/cliente.db");
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
            $result = file("../model/cliente.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[3] == $id){
                    $encontrou = true;
                    $linha = $index;
                }
            }

            if ($encontrou){
                $dados = file("../model/cliente.db");
                unset($dados[$linha]);
                file_put_contents("../model/cliente.db", $dados);    
            }
        }
    
        public function update ($nome, $senha, $email, $id){
            $this->delete($id);
            $this->insertJaCadastrado($nome, $senha, $email, $id);
        }
    
        public function insert ($nome, $senha, $email){    
            $delimitador = "|";
            $banco = fopen("../model/cliente.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha .  $delimitador 
                    . $email . $delimitador . $this->gerarID() . "\n");
            fclose ($banco);
        }
    
        //more
        public function realizarLogin ($email, $senha){
            $result = file("../model/cliente.db");
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
            $banco = fopen("../model/cliente.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha .  $delimitador 
                    . $email . $delimitador . $id . "\n");
            fclose ($banco);
        }
    

    }
?>









