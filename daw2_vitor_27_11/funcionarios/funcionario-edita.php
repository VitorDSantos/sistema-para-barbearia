<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $funcionario = new Funcionario();
    $funcionario->setId($_GET['id']);

    $funcionarioDao = new FuncionarioDao();
    $fData = $funcionarioDao->selectById($funcionario);
    
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
                        <h1 class="page-header">funcionario</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Editar funcionario
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="funcionario-edita-ok.php" method="POST">
                                            
                                            <input type="hidden" name="id" value="<?php echo $fData->getId(); ?>" >
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input class="form-control" value="<?php echo $fData->getNome(); ?>" placeholder="Nome" name="nome" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label>Servico</label>
                                                <input type="text" class="form-control" value="<?php echo $fData->getServico(); ?>" placeholder="Servico" name="servico" required="true">
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