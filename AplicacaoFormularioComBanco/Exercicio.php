<!DOCTYPE html>
<html>
<head>
	<title>Nome da Pagina</title>
	<meta charset="utf-8">
	<meta name="author" content="Sol">
	<meta name="description" content="Cadastro">
	<script src="script.js"></script>
</head>
<body>

	<style>
		

		body{
			font-family: sans-serif;
		}
		.formulario{

			margin-left: 40%;
			margin-top: 300px;
		}

		#legenda, #cpf, #creci, #nome, #btnEnviar{
			display: block;
			padding: 5px;
			margin-top: 5px;
			width: 300px;
			box-sizing: border-box;

		}

		#resultado{
			margin-left: 40%;
			margin-top: 5%;

		}


	</style>


	<form class="formulario" action="Banco.php" method="get">
		<legend id="legenda">Cadastro de Corretor</legend>
		<input id="cpf" type="text" name="CPF" placeholder="Digite seu CPF" pattern="[0-9]{11}" title="Digite os 11 digitos sem pontuação">
		<input id="creci" type="text" name="Creci" placeholder="Digite seu Creci" minlength="2" title="Obrigatório no minimo 2 caracteres">
		<input id="nome" type="text" name="Nome" placeholder="Digite seu Nome" minlength="2" title="Obrigatório no minimo 2 caracteres">
		<input id="btnEnviar" type="submit">
	</form>

</body>
</html>

<div id="resultado"><?php
	
	if(isset($_GET))
	{
		foreach ($_GET as $key => $value)
		{

			echo $key. " " . $value . "<br>";
		}
	}

?></div>