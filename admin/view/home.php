<?php

include('ressources/incs/header2.php');

?>

<button type="button" class="btn btn-default btn-lg" onclick="document.location.href='index.php?url=users';">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Utilisateurs
</button>

<button type="button" class="btn btn-default btn-lg" onclick="document.location.href='index.php?url=etablissement';">
    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Établissements
</button>

<button type="button" class="btn btn-default btn-lg" onclick="document.location.href='index.php?url=doc';">
    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Documentation
</button>

<?php

include('ressources/incs/footer.php');

?>