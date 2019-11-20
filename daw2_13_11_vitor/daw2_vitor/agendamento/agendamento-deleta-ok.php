<?php
include_once '../classes/autoload.php';

//Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $agendamento = new Agendamento();
    $agendamento->setId($_GET['id']);
    

    $agendamentoDao = new AgendamentoDao();
    $agendamentoDao->delete($agendamento);
    
    header( "Refresh:5; url=agendamento-lista.php", true, 303);
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
		  <a href="../agendamento/agendamento-lista.php"><div class="menu--link" > Ver Agendamentos</div></a>
		  <a  href="../barber.html"><div class="menu--link"> Página Inicial</div></a>
		</nav>
	</div>
</header>
    <body>
        
            <div id="page-wrapper" align="center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">agendamento</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Excluir agendamento
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        agendamento Deletado!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
          
    </body>

</html>
