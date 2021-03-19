<?php 

class Funcionario{
   
    private $nome;
    private $email;
    private $senha;
    private $id;
    
    public function __construct ($n, $e, $s, $i){
        $this->$nome = $n;
        $this->$email = $e;
        $this->$senha = $s;
        $this->$id = $i;
    }
    
    
    public function setNome($n) {
        $this->$nome = $n;
    }
    public function setEmail($e) {
        $this->$email = $e;
    }
    public function setSenha($s) {
        $this->$senha = $s;
    }
    public function setId($i) {
        $this->$id = $i;
    }
    
    
    public function getNome (){
        return $this->$nome;
    }
    public function getEmail (){
        return $this->$email;
    }
    public function getSenha (){
        return $this->$senha;
    }
    public function getId (){
        return $this->$id;
    }
        
}

?>