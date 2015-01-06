<?php
needAdmin();

include('model/Users.php');

$results = new Users();

if(isset($_GET['id']) && !isset($_GET['maj']))
{
    $info = $results->afficheUniqueUser($_GET['id']);
}
elseif(isset($_GET['maj']))
{
    $info = $results->updateUser($_POST['id'],$_POST['firstname'],$_POST['lastname'],$_POST['mail'],$_POST['company']);
}

include('view/user.php');