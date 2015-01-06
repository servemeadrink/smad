<?php include("ressources/incs/header.php");

//Tableau d'erreur
$error = array(
	'1' => "Please fill all the fields.",
	'2' => "Error : Upload business image.",
	'3' => "Please observe the minimum dimensions of business image.",
	'4' => "Wrong extension for business picture: only jpg and png accepted.",
	'5' => "Error : Upload showroom image.",
	'6' => "Please observe the minimum dimensions of showroom image.",
	'7' => "Wrong extension for showroom picture: only jpg and png accepted."
);

?>

<div id="zone_add_business">
<div id="add_business">
	<h1>Add your own business</h1>

	<div class="msg_error" style="color: red; margin-bottom: 10px; margin-top: 20px; font-weight: bold;">

	<?php
		if( isset($_GET['error']) )
		{
			$erreur = $_GET['error'];
			echo $error[$erreur];
		}
	?>

	</div>
	
    
    <div id="addbusiness_steps"></div>
    
	<form id="ajoutbusiness" action="index.php?url=businessadd" method ="POST" enctype="multipart/form-data">

		<fieldset>

		<div id="informations">
		<span class="trait"></span><h3>Informations</h3>
			<input id="name" type="text" name="name" value="<?php if(isset($_SESSION['preview']['e_name'])){echo $_SESSION['preview']['e_name'];} ?>" placeholder="Name" />
			<textarea id="description" placeholder="Description" name="description"  maxlength="200"/><?php if(isset($_SESSION['preview']['e_descript'])){echo $_SESSION['preview']['e_descript'];} ?></textarea>
			<input id="country" type="text" name="country" placeholder="Country" value="<?php if(isset($_SESSION['preview']['e_country'])){echo $_SESSION['preview']['e_country'];} ?>" />
			<input id="city" type="text" name="city" placeholder="City" value="<?php if(isset($_SESSION['preview']['e_city'])){echo $_SESSION['preview']['e_city'];} ?>" />
			<input id="zip_code" maxlength="5" type="number" name="zip_code" value="<?php if(isset($_SESSION['preview']['e_zip'])){echo $_SESSION['preview']['e_zip'];} ?>"placeholder="92200" maxlength="5"/>
			<input id="address" type="text" name="address" placeholder="Address" value="<?php if(isset($_SESSION['preview']['e_address'])){echo $_SESSION['preview']['e_address'];} ?>"/>
			<input id="email" type="email" name="email" placeholder="E-mail (optional)" value="<?php if(isset($_SESSION['preview']['e_mail'])){echo $_SESSION['preview']['e_mail'];} ?>"/>
			<input id="phone" type="tel" name="phone" placeholder="Phone number (optional)" value="<?php if(isset($_SESSION['preview']['e_phone'])){echo $_SESSION['preview']['e_phone'];} ?>"/>
		</div>

		<div id="first_picture">
		<span class="trait"></span><h3>First picture</h3>
		<label id="first_upload" class="upload_img">
			Upload new image
			<input type="file" name="business" />
		</label>
		<p><span class="italic">This will appear on your business profile <br/>as the box picture.</span></p>
		<p class="dimensions">The minimum picture dimensions are <span class="bold">384x154</span>.</p>
        <div class="upload_progress"><div class="upload_progressbar"></div><p>upload.jpg</p></div><div class="upload_status"><img src="ressources/images/green_check.png" alt='checked'/></div>
		</div>

		<div id="showroom_picture">
		<span class="trait"></span><h3>Showroom picture</h3>
		<label id="showroom_upload" class="upload_img">
			Upload new image
			<input type="file" name="showroom" />
		</label>
		<p><span class="italic">This will appear on your business profile <br/>as the showroom picture.</span></p>
		<p class="dimensions">The minimum picture dimensions are <span class="bold">854x520</span>.</p>
		<div class="upload_progress"></div><div class="upload_status"></div>
		<p id="pleasecheck">Please make sure all the informations above are correctly completed.<br/>
Then click on the preview button to see what it looks like !</p>

		<input id="addbusiness_submit" type="submit" name="Preview" value="Preview" />
		</div>


		</fieldset>

	</form>
</div>
</div>

<?php include("ressources/incs/footer.php"); ?>
