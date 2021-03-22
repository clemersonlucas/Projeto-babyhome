<?php
    include '../controller/Cliente.php';
    
    class ClienteDao{
    
        //metodos extra
        public function logar ($nome, $senha, $link, $email, $id){
            $delimitador = "|";
            $banco = fopen("../model/cliente_logado.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha .  $delimitador . $link .  $delimitador 
                    . $email . $delimitador . $id);
            fclose ($banco);
        }

        public function deslogar (){
            unlink("../model/cliente_logado.db");
        }


        public function selectNomeLogado (){
            $result = file("../model/cliente_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[0];        
            }  
            return null;
        } 
        public function selectSenhaLogado (){
            $result = file("../model/cliente_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[1];        
            }  
            return null;
        } 
        public function selectLinkLogado (){
            $result = file("../model/cliente_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[2];        
            }  
            return null;
        } 
        public function selectEmailLogado (){
            $result = file("../model/cliente_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[3];        
            }  
            return null;
        } 
        public function selectIdLogado (){
            $result = file("../model/cliente_logado.db");
            foreach ($result as $index => $r) {
               return explode("|", $r)[4];        
            }  
            return null;
        } 


        // mostrar clientes
        public function showClientes(){
            $result = file("../model/cliente.db");
            foreach ($result as $index => $r) 
            {
                $nome = explode("|", $r)[0];
                $senha = explode("|", $r)[1];
                $link = explode("|", $r)[2];
                $email = explode("|", $r)[3];
                $id = explode("|", $r)[4];
                


                echo "<article id='card' style='margin:auto; width:25%;'>";
                echo '<div class="card" style="margin:auto; width: 14rem; height:auto; margin-bottom:30px;">';
                echo "<img style=' margin: auto; max-width: 100%; min-height:10rem;' src='$link' class='card-img-top' alt='...'>";

                echo '<div class="card-body">
                        <h5 class="card-title">' . $nome .' </h5>
                        <p class="card-text">' . $email . '</p>
                        <p style="color:#00f; font-size: 12px;" class="card-text"> Identificador: ' . $id . '</p>';
                        echo "<a href='../method/removerCliente.php?nome=$nome' style='margin-left: 4px;' class='btn btn-outline-danger'>Remover</a>
                        </div>
                    </div>    
                </article>";
            
            }
        }





        // ATÉ AQUI TA FUNCIONANDO
        public function selectNome ($id){
            $result = file("../model/cliente.db");
            foreach ($result as $index => $r) {
                $idBanco = explode("|", $r)[4]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[0];        
                }                    
            }  
            return null;
        } 

        public function selectSenha ($id){
            $result = file("../model/cliente.db");
            foreach ($result as $index => $r) {
                $idBanco = explode("|", $r)[4]; 
                if ($id == intval($idBanco)){
                    return explode("|", $r)[1];        
                }                    
            }  
            return null;
        } 

        public function selectLink ($id){
            $result = file("../model/cliente.db");
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
            $result = file("../model/cliente.db");
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
            $result = file("../model/cliente.db");
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


        public function deleteForName ($name){
            $linha = 0;
            $encontrou = false;
            $result = file("../model/cliente.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[0] == $name){
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


        public function delete ($id){
            $linha = 0;
            $encontrou = false;
            $result = file("../model/cliente.db");
            foreach ($result as $index => $r) {
                if(explode("|", $r)[4] == $id){
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
    
        public function update ($nome, $senha, $link, $email, $id){
            $this->delete($id);
            $this->insertJaCadastrado($nome, $senha, $link, $email, $id);
        }
    
        public function insert ($nome, $senha, $link, $email){    
            $delimitador = "|";
            $banco = fopen("../model/cliente.db", "a");
            fwrite ($banco, $nome . $delimitador . $senha .  $delimitador . $link .  $delimitador 
                    . $email . $delimitador . $this->gerarID() . "\n");
            fclose ($banco);
        }
    
        //more
        public function realizarLogin ($email, $senha){
            $result = file("../model/cliente.db");
            foreach ($result as $index => $r) {
                //echo explode("|", $r)[3] . " - " . explode("|", $r)[1] . "<br>";
                if (explode("|", $r)[3] == $email){
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
            $result = file("../model/produto.db");
            foreach ($result as $index) {
               $cont = $cont + 1;
            }
            return $cont;
        }


        public function insertJaCadastrado ($nome, $senha, $link, $email, $id){    
            $delimitador = "|";
            $banco = fopen("../model/cliente.db", "a");
            fwrite ($banco, $nome . 
                $delimitador . $senha .  
                $delimitador . $link . 
                $delimitador . $email . 
                $delimitador . $id . "\n");
            fclose ($banco);
        }
    

    }
?>











