<?php
include_once '../classes/autoload.php';

//Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
 //(isset($_POST['nome']) && $_POST['nome'] != "" 
     //   && isset($_POST['senha']) && $_POST['senha'] != ""
     //   && isset($_POST['email']) && $_POST['email'] != "") {

    $agendamento = new Agendamento();
    $agendamento->setId($_POST['id']);
    $agendamento->setNome_cliente($_POST['nome_cliente']);
    $agendamento->setBarbeiro($_POST['barbeiro']);
    $agendamento->setServico($_POST['servico']);
    $agendamento->setData($_POST['data']);

    $agendamentoDao = new AgendamentoDao();
    $agendamentoDao->update($agendamento);
//}
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

        <!-- Bootstrap Core CSS -->
        <link href="www/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="www/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="www/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="www/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
        
           <div align="center">
                    <div class="col-lg-12">
                        <h1 class="page-header">agendamento</h1>
                    </div>
              

               
                            <div class="panel-heading">
                                Editar agendamento
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        agendamento Editado!
                                    </div>
                                </div>
                            </div>

                    </body>
</div>
                    </html>
