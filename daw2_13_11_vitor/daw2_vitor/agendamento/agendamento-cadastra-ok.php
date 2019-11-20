<?php
include_once '../classes/autoload.php';

//Login::checkAuth();

//Verifica se veio tudo preenchido do formulário


    $agendamento = new Agendamento();
    $agendamento->setNome_cliente($_POST['nome_cliente']);
    $agendamento->setBarbeiro($_POST['barbeiro']);
    $agendamento->setServico($_POST['servico']);
    $agendamento->setData($_POST['data']);
	

    $agendamentoDao = new AgendamentoDao();
    $agendamentoDao->insert($agendamento);
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
		  <a  href="../barber.html"><div class="menu--link"> Página Inicial</div></a>
		</nav>
	</div>
</header>
    <body>

            <div id="page" align="center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Seu Agendamento foi marcado</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Estaremos esperando pela sua presença! ;)
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
           </div>
                    
                    </body>

                    </html>
