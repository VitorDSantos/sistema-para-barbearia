<?php 
include_once '../classes/autoload.php';

//Login::checkAuth();

$funcionarioDao = new FuncionarioDao();
$lista = $funcionarioDao->select();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lista de funcionario </title>

</head>

<body>
    
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Servico</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($lista as $funcionario): ?>
                                        
                                        <tr>
                                            <td><?php echo $funcionario->getId(); ?></td>
                                            <td><?php echo $funcionario->getNome(); ?></td>
                                            <td><?php echo $funcionario->getServico(); ?></td>
                                            <td>
                                            <button type="button" onclick="window.location='funcionario-edita.php?id=<?php echo $funcionario->getId(); ?>';" class="btn btn-outline btn-primary    
">Editar</button>
<button type="button" onclick="confirm('Deseja exclir este registro?') ? window.location='funcionario-deleta-ok.php?id=<?php echo $funcionario->getId(); ?>' : stop = false;" class="btn btn-outline btn-danger">Deletar</button>
                                            </td>
                                        </tr>
                                       <?php endforeach; ?> 
                                        
                                    </tbody>
                                </table>
                          
</body>

</html>