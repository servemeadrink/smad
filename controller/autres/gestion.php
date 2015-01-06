<?php
	
	include('model/AddBusiness.php');
	
	if(isset($_POST['ajout_e']))
	{
		if(!empty($_POST['e_name']))
		{
			$element = new Esta();
			$element -> AddEsta();
		}
		else
		{
			echo'renseignez les champs attendus';
		}
	}
	
	include('view/gestion.php');
?>