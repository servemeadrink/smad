<?php
	
	include('model/deconnexion.php');

    if(isset($_SESSION['u_id']))
    {
        $deco = new Disconnection();
        $deco->disconnect();
    }
?>