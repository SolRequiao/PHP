<?php

	$dbhost = "localhost";
 	$dbuser = "root";
	$dbpass = "";
	$db = "db_sol";
 	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	
	 $sql = "insert INTO tb_corretor (nome, cpf, creci) VALUES ('".$_GET["Nome"]. " ', '".$_GET["CPF"]."', ".$_GET["Creci"].")";
	 $stmt = mysqli_stmt_init($conn);

	 if(!mysqli_stmt_prepare($stmt, $sql))
		 exit('SQL error');

		 mysqli_stmt_execute($stmt);
?>