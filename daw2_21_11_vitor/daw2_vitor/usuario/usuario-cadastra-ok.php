<?php
include_once '../classes/autoload.php';

//Login::checkAuth();

//Verifica se veio tudo preenchido do formulário

    $usuario = new Usuario();
    $usuario->setNome($_POST['nome']);
    $usuario->setSenha(md5($_POST['senha']));
    $usuario->setEmail($_POST['email']);

    $usuarioDao = new UsuarioDao();
    $usuarioDao->insert($usuario);

?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/admin.css">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gerenciador</title>

       

    </head>
<header >
	<input type="checkbox" id="check">
	<label id="icone" for="check"><img src="../assets/imagens/icone.png"></label>
	<div class="menu">
		<nav>
		  <a  href="../servicos/servico-lista.php"><div class="menu--link"> Organizar Serviços</div></a>
		  <a  href="../usuario/usuario-cadastra.php"><div class="menu--link">Adicionar Usuario</div></a>
		  <a href="../agendamento/agendamento.php"><div class="menu--link" > Ver Agendamentos</div></a>
		  <a  href="../barber.html"><div class="menu--link"> Página Inicial</div></a>
		</nav>
	</div>
	</header>
<body>
<div  align = 'center'>
    <div class="div3"><h1>Administrador</h1></div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Usuário</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cadastro de Usuário
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        Usuário Cadastrado!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                    </body>

                    </html>
