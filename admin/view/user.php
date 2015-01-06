<?php

include('ressources/incs/header2.php');

?>

    <div class="row">
        <div class="col-md-6">
            <?php
                if(isset($_GET['success']) && $_GET['success'] = 1)
                {
                    echo'<div align="center" class="alert-success">Mise à jour fiche client réussie !</div>';
                }
            ?>
            <form method="post" action="index.php?url=user&id=<?php echo $info[0]['u_id']; ?>&maj=1">

                <h2 class="form-group">
                    <p>ID : <?php echo $info[0]['u_id']; ?></p>
                </h2>

                <input type="text" hidden value="<?php echo $info[0]['u_id']; ?>" name="id" />

                <div class="form-group">
                    <label for="firstname">Fristname</label>
                    <input <?php if(!isset($_GET['edit'])){echo'disabled';} ?> name="firstname" type="text" class="form-control" id="firstname" value="<?php echo $info[0]['u_firstname']; ?>" placeholder="Firstname">
                </div>

                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input <?php if(!isset($_GET['edit'])){echo'disabled';} ?> type="text" class="form-control" id="lastname" value="<?php echo $info[0]['u_lastname']; ?>" name="lastname" placeholder="Lastname">
                </div>

                <div class="form-group">
                    <label for="mail">Email address</label>
                    <input <?php if(!isset($_GET['edit'])){echo'disabled';} ?> type="email" name="mail" class="form-control" id="mail" value="<?php echo $info[0]['u_mail']; ?>" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="nature">Nature</label>
                    <select <?php if(!isset($_GET['edit'])){echo'disabled';} ?> name="company" id="nature" class="form-control">
                        <option value="0" <?php if($info[0]['u_company'] == 0){echo'selected="selected" ';} ?>>Individual</option>
                        <option value="1" <?php if($info[0]['u_company'] == 1){echo'selected="selected" ';} ?>>Professional</option>
                    </select>
                </div>

                <input type="submit" value="Mettre à jour" <?php if(!isset($_GET['edit'])){echo'style="display: none;"';} ?> />
            </form>
        </div>
    </div>



<?php

include('ressources/incs/footer.php');

?>