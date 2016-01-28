<?php 
	$ip = explode (".", $_SERVER['SERVER_ADDR']);

	switch ($ip[0]){
		case 127 :
			//local 
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "mlr1";
			break;
			
		case 172 :
			//olympe
			$host = "sql.olympe.in";
			$user = "";
			$password = "";
			break;
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}

	$link = mysql_connect ($host, $user, $password)
		or die("Impossible de se connecter : ");

	$connexion = mysql_select_db($dbname);
	if (!$connexion){
		die ('Impossible de sélectionner la base de données : ' . mysql_error());
	}
?> 
