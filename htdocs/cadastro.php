<?php
require_once("banco.php");

class Cadastro extends Banco {
    private $nome;
    private $telefone;
    private $origem;
    private $data_contato;
    private $observacao;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setOrigem($orig){
        $this->origem = $orig;
    }
    public function setData_contato($datac){
        $this->data_contato = $datac;
    }
    public function setObservacao($obse){
        $this->observacao = $obse;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getOrigem(){
        return $this->origem;
    }
    public function getData_contato(){
        return $this->data_contato;
    }
    public function getObservacao(){
        return $this->observacao;
    }

    public function incluir(){
        return $this->setAgendamentos($this->getNome(),$this->getTelefone(),$this->getOrigem(),$this->getData_contato(),$this->getObservacao());
    }
}
?>