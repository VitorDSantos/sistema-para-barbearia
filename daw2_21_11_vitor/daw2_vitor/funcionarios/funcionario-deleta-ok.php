<?php
include_once '../classes/autoload.php';

//Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $funcionario = new Funcionario();
    $funcionario->setId($_GET['id']);
    

    $funcionarioDao = new FuncionarioDao();
    $funcionarioDao->delete($funcionario);
    
    header( "Refresh:5; url=funcionario-lista.php", true, 303);
}
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
                        <h1 class="page-header">funcionarios</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Excluir funcionário
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        funcionário Deletado!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
          
    </body>

</html>
