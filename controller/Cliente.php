<?php 

class Cliente{
   
    private $nome;
    private $email;
    private $link;
    private $senha;
    private $id;
        
    public function setNome($n) {
        $this->$nome = $n;
    }
    public function setLink($l) {
        $this->$link = $l;
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
    public function getLink (){
        return $this->$link;
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