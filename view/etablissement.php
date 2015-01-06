<?php include("ressources/incs/header.php"); ?>
	

<div id="zone_etablissement">
	<div id="slider_etablissement" style="background:url(<?php echo $infos['e_url_business']; ?>) no-repeat center center; background-size:cover;">
      	<div id="etablissement">
      		<div id="big-image-etablissement" class="diapo_etablissement" style="background:url(<?php echo $infos['e_url_showroom']; ?>) no-repeat center center;">
      		</div>
      		<div class="description_etablissement">
      			<div id="description-image-etablissement" class="description_img" style="background:url(<?php echo $infos['e_url_business']; ?>) no-repeat center center; background-size:cover;">
      			</div>
      			<div class="description_text">
                <div id="etablissement_nom" class="trait2"></div><h2><?php echo $infos['e_name']; ?></h2><img id="etablissmeent-favorite-image" src="ressources/images/star.png" alt=""/>

					<p><?php echo $infos['e_descript']; ?></p>


					<img class="etablissement_contact contact_floatleft" src="ressources/images/location.png" alt=""/><p class="etablissement_contact"><?php echo $infos['e_address']; ?><br/>
				<?php echo $infos['e_city'].' '.$infos['e_zip']; ?>, <?php echo $infos['e_country']; ?></p>

					<?php
					if(!empty($infos['e_phone']) OR (!empty($infos['e_email'])))
					{
						echo'
						<img class="etablissement_contact contact_floatleft" src="ressources/images/infos.png" alt=""/><p class="etablissement_contact">'.$infos['e_email'].'<br/>
						'.$infos['e_phone'].'</p>';
					}


					?>
      			</div>
          	</div>
      	</div>        
	</div>
    
    
    <div id="available_drink_passes">
    <h1>Available drink passes</h1>
    <img src="ressources/images/coupon_big.png" alt=""/><h2>NO DRINK PASSES YET</h2>
    
    </div>
 
    <div id="validation_barre" <?php if(!isset($_SESSION['preview'])){echo'style="display: none"';}?>>
    	<div id="validation_barre_text">
            <a href="index.php?url=addbusiness" class="previous">PREVIOUS</a>
            <a href="index.php?url=businessadd&validate=1" class="validate">VALIDATE</a>
       	</div>
  	</div>
</div>

<?php include("ressources/incs/footer.php"); ?>
