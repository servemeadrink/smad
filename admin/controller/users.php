<?php
needAdmin();

include('model/Users.php');

$results = new Users();

if(isset($_POST['envoie']) && !empty($_POST['recherche_barre']))
{
    $nb = $results->rechercheUser($_POST['recherche_barre']);

    $nb_users = $nb[0];
}
elseif(isset($_GET['delete']))
{
    $delete = $results->deleteUser($_GET['delete']);
}
else
{
    $nb = $results->afficheUsers();

    $nb_users = $nb[0];
}


include('view/users.php');

