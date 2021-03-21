<?php

class Funcionario{
   
    private $nome;
    private $valor;
    private $quantidade;
    private $link;
    private $descricacao;
    private $idFuncionario;
    private $id;
    
    public function __construct ($n, $v, $q, $l, $d, $if, $i){
        $this->$nome = $n;
        $this->$valor = $v;
        $this->$quantidade = $q;
        $this->$link = $l;
        $this->$descricacao = $d;
        $this->$idFuncionario = $if;
        $this->$id = $i;
    }
    
    public function setNome($n) {
        $this->$nome = $n;
    }
    public function setDescricao($d) {
        $this->$descricacao = $d;
    }
    public function setValor($v) {
        $this->$valor = $v;
    }
    public function setQuantidade($q) {
        $this->$quantidade = $q;
    }
    public function setLink($l) {
        $this->$link = $l;
    }
    public function setIdFuncionario($if) {
        $this->$idFuncionario = $idFuncionario;
    }
    public function setId($i) {
        $this->$id = $i;
    }

    public function getNome (){
        return $this->$nome;
    }
    public function getDescricao (){
        return $this->$descricacao;
    }
    public function getValor (){
        return $this->$valor;
    }
    public function getQuantidade (){
        return $this->$quantidade;
    }
    public function getLink (){
        return $this->$link;
    }
    public function getIdFuncionario (){
        return $this->$idFuncionario;
    }
    public function getId (){
        return $this->$id;
    }

    
}

?>