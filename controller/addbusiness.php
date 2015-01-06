<?php

needPro();

//Supprime les images si on a pas validé le preview
if(isset($_SESSION['preview']['e_url_showroom']) && isset($_SESSION['preview']['e_url_business']))
{
    unlink($_SESSION['preview']['e_url_showroom']);
    unlink($_SESSION['preview']['e_url_business']);
}

include('view/addbusiness.php');