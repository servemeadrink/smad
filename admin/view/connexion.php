<?php
    include('ressources/incs/header.php');

    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
        $erreur = array(
            '1'=>"Veuillez renseigner tous les champs.",
            '2'=>"Combinaison login / password erroné"
        );
    }

?>



<div class="row">
    <div class="col-md-6 col-md-offset-3" id="log">
        <h3 align="center">Connexion Admin</h3>

        <div align="center" class="alert-danger">
            <?php
                if(isset($_GET['error']))
                {
                    echo $erreur[$error];
                }

            ?>
        </div>

        <form action="#" method="post">
            <div class="form-group">
                <label for="admin">User</label>
                <input type="test" class="form-control" name="admin" id="admin" placeholder="Log In">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default btn-lg btn-block " name="submit" value="Connexion"/>
            </div>

        </form>

    </div>
</div>





<?php
    include('ressources/incs/footer.php');
?>