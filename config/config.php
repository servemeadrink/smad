<?php

	/****************** Connexion à la base de données *******************/

	try{
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // Charset à utf-8 
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Gestion des erreurs
			PDO::ATTR_PERSISTENT => false
			);
		// Initialisation de la connexion (type de bdd, pseudo, mot de passe, options)
		$conn = new PDO("mysql:host=kiyanmcoota.mysql.db;dbname=kiyanmcoota", "kiyanmcoota", "Aqzsed123456", $options);
		// $db = new PDO( 'mysql:host=ns366377.ovh.net;dbname=meliani', 'meliani', '837513', $options );
//		$db = new PDO( 'mysql:host=servemeacbsmad.mysql.db;dbname=servemeacbsmad', 'servemeacbsmad', 'servemeA1', $options );
	}
	catch ( Exception $e ) 
	{
		echo "Connexion à MySQL impossible : ", $e->getMessage();
		die();
	}
	
	/********************* Sécurisation de la session *********************/

	function secure_session_start($name){
		session_name($name);
		session_start();
		
		$secur = $_SERVER['HTTP_USER_AGENT'];
		
		if(!isset($_SESSION['ME_SECU']))
		{
			$_SESSION['ME_SECU'] = $secur;
			return true;
		}
		else
		{
			if($_SESSION['ME_SECU'] != $secur)
			{
				session_regenerate_id();
				$_SESSION = array();
				
				die("Error : La session semble corrompue.");
			}
			else
			{
				return true;
			}
		}
	}
	
	//Fonction debug, qui affiche les tableaux session et cookie
	
	function debug()
	{
		echo'<h2>Print_r _GET</h2>';
		
		var_dump($_GET);
		
		echo'<h2>Print_r _POST</h2>';
		
		var_dump($_POST);
		
		echo'<h2>Print_r _SESSION</h2>';
		
		var_dump($_SESSION);
		
		echo'<h2>Print_r _COOKIE</h2>';
		
		var_dump($_COOKIE);
	}

	function needLog()
	{
		if(!isset($_SESSION['u_id']))
		{
			header('Location: index.php');
		}
	}

	function needPro()
	{
		if(!isset($_SESSION['u_id']) && !isset($_SESSION['u_company']) && $_SESSION['u_company'] != 1)
		{
			header('Location: index.php');
		}
	}

	function needAdmin()
	{
		if(!isset($_SESSION['admin']['log']) && $_SESSION['admin']['log'] != 1)
		{
			header('Location: index.php');
		}
	}
?>