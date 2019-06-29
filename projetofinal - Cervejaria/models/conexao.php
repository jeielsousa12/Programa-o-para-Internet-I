<?php 

$dsn = "mysql:dbname=dbprojetofinal;host=localhost"; 
$dbuser = "root";
$dbpass = "";

	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);
		
		// echo "Conexão estabelecida com sucesso!";
		
	} catch(PDOException $e){
		
		echo "Falha aqui: ".$e->getMessage();
	}

 ?>
