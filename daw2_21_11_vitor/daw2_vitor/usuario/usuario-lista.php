<?php 
include_once '../classes/autoload.php';

Login::checkAuth();

$usuarioDao = new UsuarioDao();
$lista = $usuarioDao->select();
?>

<!DOCTYPE html>
<html lang="en">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lista de Usuarios </title>

</head>
<header >
	<input type="checkbox" id="check">
	<label id="icone" for="check"><img src="../assets/imagens/icone.png"></label>
	<div class="menu">
		<nav>
		  <a  href="../servicos/servico-lista.php"><div class="menu--link"> Organizar Serviços</div></a>
		  <a href="../agendamento/agendamento.php"><div class="menu--link" > Ver Agendamentos</div></a>
		  <a  href="../barber.html"><div class="menu--link"> Página Inicial</div></a>
		</nav>
	</div>
	</header>
<body>
    <div class="div3"><h1>Administrador</h1></div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($lista as $usario): ?>
                                        
                                        <tr>
                                            <td><?php echo $usario->getId(); ?></td>
                                            <td><?php echo $usario->getNome(); ?></td>
                                            <td><?php echo $usario->getEmail(); ?></td>
                                            <td>
                                            <button type="button" onclick="window.location='usuario-edita.php?id=<?php echo $usario->getId(); ?>';" class="btn btn-outline btn-primary    
">Editar</button>
<button type="button" onclick="confirm('Deseja exclir este registro?') ? window.location='usuario-deleta-ok.php?id=<?php echo $usario->getId(); ?>' : stop = false;" class="btn btn-outline btn-danger">Deletar</button>
                                            </td>
                                        </tr>
                                       <?php endforeach; ?> 
                                        
                                    </tbody>
                                </table>
                          
</body>

</html>