<?php
include_once '../classes/autoload.php';

//Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['senha']) && $_POST['senha'] != ""
        && isset($_POST['email']) && $_POST['email'] != "") {

    $usuario = new Usuario();
    $usuario->setId($_POST['id']);
    $usuario->setNome($_POST['nome']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setEmail($_POST['email']);

    $usuarioDao = new UsuarioDao();
    $usuarioDao->update($usuario);
}
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
    <div class="div3"><h1>Administrador</h1></div>
                    <div class="col-lg-12" align = 'center'>
                        <h1 class="page-header">Usuário</h1>
                   
              

               
                            <div class="panel-heading">
                                Editar Usuário
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        Usuário Editado!
                                    </div>
                                </div>
                            </div>
					 </div>
                    </body>

                    </html>
