<!DOCTYPE html>
<html>
<head>
	<title>Nome da Pagina</title>
	<meta charset="utf-8">
	<meta name="author" content="Sol">
	<meta name="description" content="Teste">
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

	
	/*$cpf = $_POST["cpf"];
	$creci = $_POST["creci"];
	$nome = $_POST["nome"];


	$dbhost = "localhost";
 	$dbuser = "root";
	$dbpass = "";
	$db = "db_sol";
 	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	
	 $sql = "insert INTO tb_corretor (id, nome, cpf, creci) VALUES ('".$nome. " ', '".$cpf."', ".$creci.")";
	 $stmt = mysqli_stmt_init($conn);

	 if(!mysqli_stmt_prepare($stmt, $sql))
		 exit('SQL error');

		 mysqli_stmt_execute($stmt);*/


?></div>