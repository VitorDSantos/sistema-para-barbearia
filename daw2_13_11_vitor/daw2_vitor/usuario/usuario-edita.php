<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $usuario = new Usuario();
    $usuario->setId($_GET['id']);

    $usuarioDao = new UsuarioDao();
    $userData = $usuarioDao->selectById($usuario);
    
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
    <div class="div3"><h1>Administrador</h1></div>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Usuário</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Editar Usuário
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="usuario-edita-ok.php" method="POST">
                                            
                                            <input type="hidden" name="id" value="<?php echo $userData->getId(); ?>" >
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input class="form-control" value="<?php echo $userData->getNome(); ?>" placeholder="Nome" name="nome" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" class="form-control" value="<?php echo $userData->getSenha(); ?>" placeholder="Senha" name="senha" required="true">
                                            </div>

                                            <div class="form-group">
                                                <label>Confirmar Senha</label>
                                                <input type="password" class="form-control" value="<?php echo $userData->getSenha(); ?>" placeholder="Confirmar" name="confirmar" required="true">
                                            </div>

                                            <div class="form-group">
                                                <label>E-mail(Login)</label>
                                                <input type="email" class="form-control" value="<?php echo $userData->getEmail(); ?>" placeholder="E-mail" name="email" required="true">
                                            </div>

                                            <button type="submit" class="btn btn-default">Salvar</button>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

    </body>

</html>