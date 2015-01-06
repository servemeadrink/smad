<?php
    $url = $_GET['url'];
?>

<!doctype html>

<html>

<head>

    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="../ressources/images/favicon.png" />

    <link href="ressources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="ressources/style/style.css" rel="stylesheet" type="text/css" media="screen" />

    <title>Serve Me A Drink - admin</title>

    <script src='../ressources/js/jquery-1.11.1.min.js'></script>
    <script src='ressources/bootstrap/js/bootstrap.min.js'></script>
    <script src='ressources/script/script.js'></script>

</head>

<body>

<div class="container" id="content">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">
                    <img alt="Brand" width="70px" src="../ressources/images/logo.png">
                </a>

                <ul class="nav navbar-nav">
                    <li class="
                            <?php
                                if(!isset($url) OR (isset($url) && $url == 'home'))
                                {
                                    echo'active';
                                }
                            ?>">
                        <a href="index.php?url=home">Home</a></li>

                    <li class="
                            <?php
                    if(isset($url) && $url == 'users')
                    {
                        echo'active';
                    }
                    ?>">
                        <a href="index.php?url=users">Utilisateurs</a></li>

                    <li class="
                            <?php
                    if(isset($url) && $url == 'etablissement')
                    {
                        echo'active';
                    }
                    ?>">
                        <a href="index.php?url=etablissement">Établissements</a></li>

                    <li class="
                            <?php
                    if(isset($url) && $url == 'doc')
                    {
                        echo'active';
                    }
                    ?>">
                        <a href="index.php?url=doc">Documentation</a></li>

                </ul>

            </div>
        </div>
    </nav>