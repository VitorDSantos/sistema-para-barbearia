<?php
class Db {
    private $user = "root";
    private $pwd = "";
    private $host = "localhost";
    private $db = "barbearia";
    
    protected $conexao;
	 
	function __construct(){ 
	
	try{
		$this->conexao = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pwd);
		echo "conectado";
	}
	catch(PDOException $e){
		echo "Deu erro";
	}
	}
}
