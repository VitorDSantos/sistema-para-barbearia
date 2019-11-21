<?php
include_once '../classes/autoload.php';

//Login::checkAuth();
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
                                Cadastro de funcionarios
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="funcionario-cadastra-ok.php" method="POST">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" placeholder="Nome" name="nome" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label>Servico</label>
                                                <input type="text" class="form-control" placeholder="Servico" name="servico" required="true">
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