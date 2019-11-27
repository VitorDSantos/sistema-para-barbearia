<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Agendamento</title>
<link rel="stylesheet" type="text/css" href="assets/css/agenda.css">
<link rel="icon" type="imagem/jpg" href="assets/imagens/logop.png"/>
</head>
<body>
<div class="div">
	<div class="div2"><img src="assets/imagens/logop.png"></div>
	<div class="div3"><h1>Fazer Agendamento</h1></div>
</div>
	<div class="loginbox" style="background-color:white;">
	<img src="assets/imagens/user.jpg" class="avatar">
		<h1>Faça o Cadastro</h1><br>
		<form role="form" action="agendamento-cadastra-ok.php" method="POST">
			<p>Nome Completo:</p>
				<input type="text" id="nome"  name="nome_cliente" placeholder="Acrecentar Nome" required>
			<p>Escolher serviços:</p>
				<input type="text" id="nome"  name="servico" placeholder="Serviço" required>
			<p>Escolher Atendente:</p>
				<input type="text" id="nome"  name="barbeiro" placeholder="Atendente(Opcional)" >
			<p>Data:</p>
				<input type="date" id="data"  name="data" placeholder="Acrecentar Data" required>
			<a href="../barber.html">Voltar</a><br>
			
			<input type="submit" placeholder="Enviar" name="Cadastrar">
		</form>
		
	</div>
</body>
</html>