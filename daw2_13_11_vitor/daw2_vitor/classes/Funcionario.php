<?php

class Funcionario {
    private $id;
    private $nome;
    private $servico;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getServico() {
        return $this->servico;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setServico($servico) {
        $this->servico = $servico;
    }


}