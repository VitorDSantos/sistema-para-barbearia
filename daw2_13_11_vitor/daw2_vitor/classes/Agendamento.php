<?php

class Agendamento {
    private $id;
    private $nome_cliente;
    private $barbeiro;
    private $servico;
    private $valor;
    private $data;
    
    function getId() {
        return $this->id;
    }

    function getNome_cliente() {
        return $this->nome_cliente;
    }

    function getBarbeiro() {
        return $this->barbeiro;
    }

    function getServico() {
        return $this->servico;
    }
	function getValor() {
        return $this->valor;
    }

    function getData() {
        return $this->data;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome_cliente($nome_cliente) {
        $this->nome_cliente = $nome_cliente;
    }

    function setBarbeiro($barbeiro) {
        $this->barbeiro = $barbeiro;
    }

    function setServico($servico) {
        $this->servico = $servico;
    }

	function setValor($valor) {
        $this->valor = $valor;
    }

    function setData($data) {
        $this->data = $data;
    }


}