<?php 
include_once '../classes/autoload.php';

//Login::checkAuth();

$ServicoDao = new ServicoDao();
$lista = $ServicoDao->select();
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

    <title>Lista de servico </title>

</head>
<header >
	<input type="checkbox" id="check">
	<label id="icone" for="check"><img src="../assets/imagens/icone.png"></label>
	<div class="menu">
		<nav>
		  <a  href="../servicos/servico-lista.php"><div class="menu--link"> Organizar Serviços</div></a>
		  <a  href="../funcionarios/funcionario-lista.php"><div class="menu--link">Ver Funcionarios</div></a>
		  <a  href="../servicos/servico-cadastra.php"><div class="menu--link">Adicionar Serviços</div></a>
		  <a href="../agendamento/agendamento-lista.php"><div class="menu--link" > Ver Agendamentos</div></a>
		  <a  href="../barber.html"><div class="menu--link"> Página Inicial</div></a>
		</nav>
	</div>
</header>
<body>
<div align ="center">
    
                               <body>
    <div align="center">
                                <div id="tabela" align="center">
	<table dir="ltr" width="400px"  class="tg"
				summary="purpose/structure for speech output">
		<colgroup width="30%" />
		<colgroup id="colgroup" class="colgroup" align="center" 
				valign="middle" title="title" width="1*" 
				span="1" />
		<thead>
			<tr colspan="0"class="table-header">
				<th scope="col" class="col1">Id</th>
				<th scope="col" class="col1">Nome</th>
				<th scope="col" class="col2">Descrição</th>
				<th scope="col" class="col2">Imagem</th>
				<th scope="col" class="col2">Ações</th>
				
			</tr>
		</thead>       <tbody>
		<?php foreach($lista as $servico): ?>
		<td><?php echo $servico->getId(); ?></td>
        <td><?php echo $servico->getNome(); ?></td>
		<td><?php echo $servico->getDescricao(); ?></td>
		<td><?php echo $servico->getImagem(); ?></td>
		<td>
        <button type="button" onclick="window.location='servico-edita.php?id=<?php echo $servico->getId(); ?>';" class="btn btn-outline btn-primary    
">Editar</button>
<button type="button" onclick="confirm('Deseja exclir este registro?') ? window.location='servico-deleta-ok.php?id=<?php echo $servico->getId(); ?>' :
 stop = false;" class="btn btn-outline btn-danger">Deletar</button>
                                            </td>
                                        </tr>
                                       <?php endforeach; ?> 
                                        
                                    </tbody>
	</div>
                                </table>
							
</div>
                          
</body>

</html>