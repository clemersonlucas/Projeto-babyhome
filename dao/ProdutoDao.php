<?php

    class ProdutoDao {

        public function showProdutos (){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
              
                $nome = explode("|", $r)[0];
                $valor = explode("|", $r)[1];
                $quantidade = explode("|", $r)[2];
                $link = explode("|", $r)[3];
                $descricao = explode("|", $r)[4];
                $idQuemAlterou = explode("|", $r)[5];
               
               
                echo "<article id='card'>";
                echo '<div class="card" style="width: 18rem; margin-bottom:30px;">';
                echo "<img src='$link' class='card-img-top' alt='...'>";

                echo '<div class="card-body">
                        <h5 class="card-title">' . $nome .'</h5>
                        <p class="card-text">' . $descricao . '</p>
                        <a href="../view/detalhe-produto.php" class="btn btn-outline-info"> R$ ' . $valor .'</a>
                    </div>';
                echo "</div>";    
                echo "</article>";
            }
        }


        public function showMeusProdutos ($meuId){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) 
            {
                $nome = explode("|", $r)[0];
                $valor = explode("|", $r)[1];
                $quantidade = explode("|", $r)[2];
                $link = explode("|", $r)[3];
                $descricao = explode("|", $r)[4];
                $idQuemAlterou = explode("|", $r)[5];

                //echo $meuId . " - " . $idQuemAlterou . "<br>";

                if (intval($idQuemAlterou) == $meuId){
                    echo "<article id='card'>";
                    echo '<div class="card" style="width: 18rem; margin-bottom:30px;">';
                    echo "<img src='$link' class='card-img-top' alt='...'>";

                    echo '<div class="card-body">
                            <h5 class="card-title">' . $nome .'</h5>
                            <p class="card-text">' . $descricao . '</p>
                            <a href="../view/detalhe-produto.php" class="btn btn-outline-info"> R$ ' . $valor .'</a>
                        </div>';
                    echo "</div>";    
                    echo "</article>";
                }
            }
        }




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
    
        public function insert ($nome, $valor, $quantidade, $link, $descricao, $idFuncionario){    
            $delimitador = "|";
            $banco = fopen("../model/produto.db", "a");
            fwrite ($banco, $nome . $delimitador . $valor .  $delimitador 
                    . $quantidade . $delimitador . $link . $delimitador . $descricao . $delimitador
                    . $idFuncionario . $delimitador . $this->gerarID() . "\n");
            fclose ($banco);
        }

        // more
        public function gerarID (){
            $cont = 0;
            $result = file("../model/produto.db");
            foreach ($result as $index) {
               $cont = $cont + 1;
            }
            return $cont;
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