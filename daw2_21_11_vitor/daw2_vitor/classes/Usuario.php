<?php

class Usuario {
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $criptografia;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }
	 function getCriptografia() {
        return $this->criptografia;
    }

    function setCriptografia($criptografia) {
        $this->criptografia = $criptografia;
    }


}