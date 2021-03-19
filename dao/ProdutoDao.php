<?php

    class ProdutoDao {

        public function select (){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                echo explode("|", $r)[0] . " - "; 
                echo explode("|", $r)[1] . " - ";
                echo explode("|", $r)[2] . " - ";
                echo explode("|", $r)[3] . " - ";
                echo explode("|", $r)[4] . " - ";
                echo explode("|", $r)[5];
                echo "<br>";
            }
        } 
    
        public function delete ($id){
            $linha = 0;
            $encontrou = false;
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[5] == $id){
                    $encontrou = true;
                    $linha = $index;
                }
            }

            if ($encontrou){
                $dados = file("../model/produto.db");
                unset($dados[$linha]);
                file_put_contents("../model/produto.db", $dados);    
            }
        }
    
        public function update ($nome, $valor, $quantidade, $link, $idFuncionario, $id){
            $this->delete($id);
            $this->insertJaCadastrado($nome, $valor, $quantidade, $link, $idFuncionario, $id);
        }
    
        public function insert ($nome, $valor, $quantidade, $link, $idFuncionario){    
            $delimitador = "|";
            $banco = fopen("../model/produto.db", "a");
            fwrite ($banco, $nome . $delimitador . $valor .  $delimitador 
                    . $quantidade . $delimitador . $link . $delimitador
                    . $idFuncionario . $delimitador . $this->gerarID() . "\n");
            fclose ($banco);
        }

        // more
        public function gerarID (){
            return "0";
        }

        public function insertJaCadastrado ($nome, $valor, $quantidade, $link, $idFuncionario, $id){    
            $delimitador = "|";
            $banco = fopen("../model/cliente.db", "a");
            fwrite ($banco, $nome . $delimitador . $valor .  $delimitador 
                    . $quantidade . $delimitador . $link . $delimitador
                    . $idFuncionario . $delimitador . $id . "\n");
            fclose ($banco);
        }
    


    }

?>