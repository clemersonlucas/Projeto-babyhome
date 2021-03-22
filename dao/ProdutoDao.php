<?php

    class ProdutoDao {

        public function selectProdutoNome ($produto, $fornecedor){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if (explode("|", $r)[0] == $produto && (explode("|", $r)[5] == $fornecedor ||  ($fornecedor == null))) {
                   return explode("|", $r)[0];
                }                      
            }  
        }     
        public function selectProdutoId ($produto, $fornecedor){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if (explode("|", $r)[0] == $produto && (explode("|", $r)[5] == $fornecedor ||  ($fornecedor == null))) {
                   return explode("|", $r)[6];
                }                      
            }  
        }     
        public function selectProdutoLink ($produto, $fornecedor){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if (explode("|", $r)[0] == $produto && (explode("|", $r)[5] == $fornecedor ||  ($fornecedor == null))) {
                    return explode("|", $r)[3];
                }                      
            }  
        }     
        public function selectProdutoValor ($produto, $fornecedor){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if (explode("|", $r)[0] == $produto && (explode("|", $r)[5] == $fornecedor ||  ($fornecedor == null))) {
                    return explode("|", $r)[1];
                }                      
            }  
        }  

        public function selectProdutoDescricao ($produto, $fornecedor){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if (explode("|", $r)[0] == $produto && (explode("|", $r)[5] == $fornecedor ||  ($fornecedor == null))) {
                    return explode("|", $r)[4];
                }                      
            }  
        }  


        public function selectProdutoQuantidade ($produto, $fornecedor){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if (explode("|", $r)[0] == $produto && (explode("|", $r)[5] == $fornecedor ||  ($fornecedor == null))) {
                    return explode("|", $r)[2];
                }                      
            }  
        }     



        public function showProdutos (){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {           
                $nome = explode("|", $r)[0];
                $valor = explode("|", $r)[1];
                $quantidade = explode("|", $r)[2];
                $link = explode("|", $r)[3];
                $descricao = explode("|", $r)[4];
                $idFuncionario = explode("|", $r)[5];
                $id = explode("|", $r)[6];
               
                echo "<article id='card' style='margin:auto; width:25%;'>";
                echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";

                echo '<div class="card-body">
                        <h5 class="card-title">' . $nome .'</h5>
                        <p class="card-text">' . $descricao . '</p>
                        <p style="color:#00f; font-size: 12px;" class="card-text"> Modificado por: ' . $idFuncionario . '</p>';
                        echo "<a href='../view/detalhe-produto.php?produto=$nome&fornecedor=$idFuncionario' class='btn btn-outline-info'> R$$valor</a>
                        </div>";
                echo "</div>";    
                echo "</article>";
            }
        }

        public function showProdutosAdmin(){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) 
            {
                $nome = explode("|", $r)[0];
                $valor = explode("|", $r)[1];
                $quantidade = explode("|", $r)[2];
                $link = explode("|", $r)[3];
                $descricao = explode("|", $r)[4];
                $alterou = explode("|", $r)[5];
                $id = explode("|", $r)[6];
        
                echo "<article id='card' style='margin:auto; width:25%;'>";
                echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";

                echo '<div class="card-body">
                        <h5 class="card-title">' . $nome .'</h5>
                        <p class="card-text">' . $descricao . '</p>
                        <p style="color:#00f; font-size: 12px;" class="card-text"> Modificado por: ' . $alterou . '</p>';
                        echo "<a href='../view/detalhe-produto.php?produto=$nome&fornecedor=$nomeFornecedor' class='btn btn-outline-info'> R$$valor</a>";
                        echo "<a href='../method/removerProduto.php?nomeProduto=$nome&admin=admin' style='margin-left: 4px;' class='btn btn-outline-danger'>Remover</a>
                        </div>";
                echo "</div>";    
                echo "</article>";
            
            }
        }



        public function showMeusProdutos ($nomeFornecedor){
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) 
            {
                $nome = explode("|", $r)[0];
                $valor = explode("|", $r)[1];
                $quantidade = explode("|", $r)[2];
                $link = explode("|", $r)[3];
                $descricao = explode("|", $r)[4];
                $alterou = explode("|", $r)[5];
                $id = explode("|", $r)[6];
            
                if ($alterou == $nomeFornecedor){
                    echo "<article id='card' style='margin:auto; width:25%;'>";
                    echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                    echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";
    
                    echo '<div class="card-body">
                            <h5 class="card-title">' . $nome .'</h5>
                            <p class="card-text">' . $descricao . '</p>
                            <p style="color:#00f; font-size: 12px;" class="card-text"> Modificado por: ' . $alterou . '</p>';
                            echo "<a href='../view/detalhe-produto.php?produto=$nome&fornecedor=$nomeFornecedor' class='btn btn-outline-info'> R$$valor</a>";
                            echo "<a href='../method/removerProduto.php?nomeProduto=$nome' style='margin-left: 4px;' class='btn btn-outline-danger'>Remover</a>
                            </div>";
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
                $id = explode("|", $r)[6];
               
                //echo $meuId . " - " . $idQuemAlterou . "<br>";

                if (strpos($nome, $nomePesquisado) !== false){
                    echo "<article id='card' style='margin:auto; width:25%;'>";
                    echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                    echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";
    
                    echo '<div class="card-body">
                            <h5 class="card-title">' . $nome .'</h5>
                            <p class="card-text">' . $descricao . '</p>
                            <p style="color:#00f; font-size: 12px;" class="card-text"> Modificado por: ' . $idQuemAlterou . '</p>';
                            echo "<a href='../view/detalhe-produto.php?produto=$nome' class='btn btn-outline-info'> R$$valor</a>
                            </div>";
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
    
        public function delete ($nome){
            $linha = 0;
            $encontrou = false;
            $result = file("../model/produto.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[0] == $nome){
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
    
        public function update ($nome, $valor, $quantidade, $link, $descricao, $idFuncionario, $id){
            $this->delete($nome);
            $this->insert($nome, $valor, $quantidade, $link, $descricao, $idFuncionario, $id);
        }
    
        public function insert ($nome, $valor, $quantidade, $link, $descricao, $idFuncionario, $id){    
            $delimitador = "|";
            $banco = fopen("../model/produto.db", "a");

            $linha = $nome . $delimitador . 
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
    }

?>