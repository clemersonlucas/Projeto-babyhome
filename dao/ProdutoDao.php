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
               
               
                echo "<article id='card' style='margin:auto; width:25%;'>";
                echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";

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
                    echo "<article id='card' style='margin:auto; width:25%;'>";
                    echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                    echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";
    
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

        public function showProdutosPesquisados ($nomePesquisado){
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

                if (strpos($nome, $nomePesquisado) !== false){
                    echo "<article id='card' style='margin:auto; width:25%;'>";
                    echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                    echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";
    
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




        // para fazer
        public function select ($nome){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {

                $nome = explode("|", $r)[0];
                $valor = explode("|", $r)[1];
                $quantidade = explode("|", $r)[2];
                $link = explode("|", $r)[3];
                $descricao = explode("|", $r)[4];
                $idFuncionario = explode("|", $r)[5];
                $id = explode("|", $r)[6];
 
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
    
        public function insert ($nome, $valor, $quantidade, $link, $descricao, $idFuncionario, $id){    
            $delimitador = "|";
            $banco = fopen("../model/produto.db", "a");
            
            $linha = "\n" . $nome . $delimitador . 
                $valor .  $delimitador . 
                $quantidade . $delimitador . 
                $link . $delimitador . 
                $descricao . $delimitador . 
                $idFuncionario . $delimitador . $id;
            fwrite ($banco, $linha);
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

        public function insertJaCadastrado ($nome, $valor, $quantidade, $link, $descricao, $idFuncionario){    
            $delimitador = "|";
            $banco = fopen("../model/cliente.db", "a");
            fwrite ($banco, $nome . $delimitador . $valor .  $delimitador 
                . $quantidade . $delimitador . $link . $delimitador
                . $descricao . $delimitador
                . $idFuncionario . $delimitador . $id);
            fclose ($banco);
        }
    


    }

?>