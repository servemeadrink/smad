<?php

if(!isset($_SESSION['inscription']))
{
    include('view/signup.php');
}
else
{
    include('view/you-option.php');
}
