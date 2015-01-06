<?php
	require "Model.php";
	
	class Connexion extends Model
	{
		function connect($mail){
			// On préapare la requête
				
			$query = $this->db->prepare(	"	SELECT *
												FROM smad_user
												
												WHERE u_mail = ".$this->db->quote($mail)."
										");
			
			// On execute la requête
			$query->execute();
			
			// On récupère le résultat
			
			$result_account = $query->fetchAll(PDO::FETCH_ASSOC);
			
			// Vérification de l'existance du login
			
			$verif_mail = sizeof($result_account);
			
			return array($verif_mail,current($result_account));
		}
		
		
	}
?>