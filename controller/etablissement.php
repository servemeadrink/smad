<?php

include('model/AddBusiness.php');


//    needLog();


$infos = array();

if(isset($_SESSION['preview']) && !isset($_GET['id']))
{
    //Si on prévisualise l'établissement
    $infos = $_SESSION['preview'];
}

if(isset($_GET['id']))
{
    //Si on va sur l'établissement par l'id en passant par l'url
    $etablissement = new Esta();
    $info_esta = $etablissement->memoryEstaEid($_GET['id']);

    $infos = $info_esta[0];
}

if(!isset($_SESSION['preview']) && !isset($_GET['id']))
{
    header('Location: index.php');
}

include('view/etablissement.php');