<?php

needAdmin();

include('model/Etablissement.php');

$results = new Etablissement();

if(!isset($_GET['delete']))
{
    $nb = $results->afficheEstas();
    $nb_estas = $nb[0];
}
else
{
    $delete = $results->deleteEsta($_GET['delete']);
}
include('view/etablissement.php');