<?php

	//Inclut le fichier de configurations
	include('../config/config.php');

	//Démarre la session sécurisée
	secure_session_start("smad_admin");

	//S'il existe un paramètre $url
	if( isset($_GET['url']) )
    {
        $url = $_GET['url'];

        //Contrôle si le fichier existe

        $file = 'controller/' . $url . '.php';

        if(file_exists($file))
        {
            include($file);
        }
        else
        {
            include('controller/404.php');
        }
    }

    //S'il n'existe ni url ni de rester_co
    if(!isset($_GET['url']) && !isset($_SESSION['admin']['log']))
    {
        include('controller/connexion.php');
    }

    if(!isset($_GET['url']) && isset($_SESSION['admin']['log']) && $_SESSION['admin']['log'] == 1)
    {
        header('Location: index.php?url=home');
    }