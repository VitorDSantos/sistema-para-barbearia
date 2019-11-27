<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $servico = new servico();
    $servico->setId($_GET['id']);

    $ServicoDao = new ServicoDao();
    $userData = $ServicoDao->selectById($servico);
    
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
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
		  <a  href="../servicos/servico-cadastra.php"><div class="menu--link">Adicionar Serviços</div></a>
		  <a href="../agendamento/agendamento.php"><div class="menu--link" > Ver Agendamentos</div></a>
		  <a  href="../barber.html"><div class="menu--link"> Página Inicial</div></a>
		</nav>
	</div>
</header>
    <body>
       

            <div id="page-wrapper" align="center">
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
                                        <form role="form" action="servico-edita-ok.php" method="POST">
                                            
                                            <input type="hidden" name="id" value="<?php echo $userData->getId(); ?>" >
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input class="form-control" value="<?php echo $userData->getNome(); ?>" placeholder="Nome" name="nome" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label>descrição</label>
                                                <input type="text" class="form-control" value="<?php echo $userData->getDescricao(); ?>" placeholder="descricao" name="descricao" required="true">
                                            </div>

                                            <div class="form-group">
                                                <label>imagem</label>
                                                <input type="text" class="form-control" value="<?php echo $userData->getImagem(); ?>" placeholder="Imagem" name="imagem" required="true">
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