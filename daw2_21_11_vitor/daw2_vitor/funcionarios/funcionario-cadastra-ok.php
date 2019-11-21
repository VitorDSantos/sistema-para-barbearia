<?php
include_once '../classes/autoload.php';

//Login::checkAuth();

//Verifica se veio tudo preenchido do formulário


    $funcionario = new Funcionario();
    $funcionario->setNome($_POST['nome']);
    $funcionario->setServico($_POST['servico']);

    $funcionarioDao = new FuncionarioDao();
    $funcionarioDao->insert($funcionario);
	PRINT_R($funcionarioDao);
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gerenciador</title>

       

    </head>

    <body>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">funcionario</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cadastro de funcionario
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        funcionario Cadastrado!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </body>

                    </html>
