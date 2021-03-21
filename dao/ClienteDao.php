<?php
    include '../controller/Cliente.php';
    
    class ClienteDao{
    
        //metodos extra
        public function logar ($nome, $senha, $link, $email, $id){
            $this->deslogar();
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
                //echo explode("|", $r)[3] . " - " . explode("|", $r)[1] . "<br>";
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











