<?php

class aConnexionController
{
    public function login($login, $password)
    {
        if(!empty($login) && !empty($password))
        {
            if($login == "admin" && $password == "admin")
            {
                $_SESSION['admin']['log'] = 1;

                header('Location: index.php?url=home');
            }
            else
            {
                header('Location: index.php?error=2');
            }
        }
        else
        {
            header('Location: index.php?error=1');
        }
    }
}


if(isset($_POST['submit']))
{
    $connexion = new aConnexionController();
    $connect = $connexion->login($_POST['admin'],$_POST['password']);
}

include('view/connexion.php');
