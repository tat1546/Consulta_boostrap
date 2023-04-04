<?php
//classe com nome pessoa
class Pessoa{
    //objetos com visibilidade privada
    private $nome;
    private $telefone;
    private $origem;
    private $data;
    private $observacao;

    //metedo de captura de valor de objeto
    public function getNome(){
        return $this->nome;
    }
    //metodo de alteração de objeto
    public function setNome($nome){
        $this->nome = $nome;
    }
    //metedo de captura de valor de objeto
    public function getTelefone(){
      return $this->telefone;
    } 
    //metodo de alteração de objeto
    public function setTelefone($telefone){
    $this->telefone = $telefone;
    }
    //metedo de captura de valor de objeto
    public function getOrigem(){
        return $this->origem;
    }
    //metodo de alteração de objeto
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    //metedo de captura de valor de objeto
    public function getData(){
       return $this->data;   
    }
    //metodo de alteração de objeto
    public function setData($data){
       $this->data= $data;
    }
    //metedo de captura de valor de objeto
    public function getObservacao(){
      return $this->observacao;
    }
    //metodo de alteração de objeto
    public function setObservacao($observacao){
      $this->observacao= $observacao;
    }

}
?>