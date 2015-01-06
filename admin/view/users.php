<?php

include('ressources/incs/header2.php');

?>

<h2>Il y a <strong><?php echo $nb[0]; ?></strong> utilisateurs</h2>

<form action="index.php?url=users" method="post" name="recherche_user">
    <input type="text" name="recherche_barre" placeholder="e-mail, prénom ou nom" />
    <input type="submit" name="envoie" />
</form>

<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Adresse Mail</th>
        <th>Nature</th>
        <th>Info</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </thead>

    <?php
    foreach($nb[1] as $info_user)
    {
        echo'<tr>';
        echo'<td>'.$info_user['u_id'].'</td>';
        echo'<td>'.$info_user['u_firstname'].'</td>';
        echo'<td>'.$info_user['u_lastname'].'</td>';
        echo'<td>'.$info_user['u_mail'].'</td>';
        echo'<td>';
        if($info_user['u_company'] == 0)
        {
            echo'particulier';
        }
        else
        {
            echo'Professionnel';
        }
        echo'</td>';

        echo'<td><button type="button" class="btn btn-default" aria-label="Left Align" onclick="document.location.href=\'index.php?url=user&id='.$info_user['u_id'].'\';">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
        </button></td>';

        echo'<td><button type="button" class="btn btn-default" aria-label="Left Align" onclick="document.location.href=\'index.php?url=user&id='.$info_user['u_id'].'&edit=1\';">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        </button></td>';

        echo'<td><button type="button" onclick="if (confirm(\'Voulez-vous supprimer '.$info_user['u_firstname'].' '.$info_user['u_lastname'].' ?\')) { // Clic sur OK
           document.location.href=\'index.php?url=users&delete='.$info_user['u_id'].'\';
       }" class="btn btn-default" aria-label="Left Align">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        </button></td>';
        echo'</tr>';
    }

    ?>

</table>

<?php

include('ressources/incs/footer.php');

?>
