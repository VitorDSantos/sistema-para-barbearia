<?php 
include_once '../classes/autoload.php';

//Login::checkAuth();

$agendamentoDao = new AgendamentoDao();
$lista = $agendamentoDao->select();
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

    <title>Lista Do Agendamento </title>

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
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome Do Cliente</th>
                                            <th>Barbeiro</th>
                                            <th>Serviço</th>
                                            <th>Valor</th>
                                            <th>Data</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($lista as $agendamento): ?>
                                        
                                        <tr>
                                            <td><?php echo $agendamento->getId(); ?></td>
                                            <td><?php echo $agendamento->getNome_cliente(); ?></td>
                                            <td><?php echo $agendamento->getBarbeiro(); ?></td>
                                            <td><?php echo $agendamento->getServico(); ?></td>
                                            <td><?php echo $agendamento->getValor(); ?></td>
                                            <td><?php echo $agendamento->getData(); ?></td>
                                            <td>
                                            <button type="button" onclick="window.location='agendamento-edita.php?id=<?php echo $agendamento->getId(); ?>';" class="btn btn-outline btn-primary    
">Editar</button>
<button type="button" onclick="confirm('Deseja exclir este registro?') ? window.location='agendamento-deleta-ok.php?id=<?php echo $agendamento->getId(); ?>' : stop = false;" class="btn btn-outline btn-danger">Deletar</button>
                                            </td>
                                        </tr>
                                       <?php endforeach; ?> 
                                        
                                    </tbody>
                                </table>
</div>
                          
</body>

</html>