<?php
include_once '../classes/autoload.php';

    $usuario = new Usuario();
    $usuario->setNome($_POST['nome']);
    $usuario->setSenha(md5($_POST['senha']));
	
    $usuarioDao = new UsuarioDao();
    $usuarioDao->insert($usuario);
	
	

if (isset($_POST['nome'])== $nome && $_POST['password']== $senha){
	header("location:../servicos/servico-lista.php");
}
else{
	echo "Não cadastrado";
	header("location:log_Adm.html");
}

?>