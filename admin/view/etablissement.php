<?php

include('ressources/incs/header2.php');

?>

<h2>Il y a <strong><?php echo $nb[0]; ?></strong> établissements</h2>


<table class="table table-striped">
    <thead>
        <th>Visualiser</th>
        <th>Nom</th>
        <th>Pays</th>
        <th>Ville</th>
        <th>Créateur</th>
        <th>Supprimer</th>
    </thead>

    <?php
    foreach($nb[1] as $info_esta)
    {
        echo'<tr>';

        echo'<td><a target="_blank" href="../index.php?url=etablissement&id='.$info_esta['e_id'].'"><button type="button" class="btn btn-default" aria-label="Left Align">
        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a></td>';

        echo'<td>'.$info_esta['e_name'].'</td>';

        echo'<td>'.$info_esta['e_country'].'</td>';

        echo'<td>'.$info_esta['e_city'].'</td>';

        echo'<td><a target="_blank" href="index.php?url=user&id='.$info_esta['u_id'].'">'.$info_esta['u_firstname'].' '.$info_esta['u_lastname'].'</td>';

        echo'<td><button type="button" onclick="if (confirm(\'Voulez-vous supprimer '.$info_esta['e_name'].' ?\')) { // Clic sur OK
           document.location.href=\'index.php?url=etablissement&delete='.$info_esta['e_id'].'\';
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