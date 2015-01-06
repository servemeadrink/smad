<?php
	require "Model.php";
	
	class Users extends Model
	{
		function afficheUsers(){
			// On préapare la requête
				
			$query = $this->db->prepare(	"	SELECT *
												FROM smad_user
										");
			
			// On execute la requête
			$query->execute();
			
			// On récupère le résultat
			
			$result_account = $query->fetchAll(PDO::FETCH_ASSOC);
			
			// Vérification de l'existance du login
			
			$nbusers = sizeof($result_account);
			
			return array($nbusers,$result_account);
		}

		function afficheUniqueUser($id){
			// On préapare la requête

			$query = $this->db->prepare(	"	SELECT *
												FROM smad_user
												WHERE u_id = ".$id."
										");

			// On execute la requête
			$query->execute();

			// On récupère le résultat

			$result_account = $query->fetchAll(PDO::FETCH_ASSOC);

			return array(current($result_account));
		}

		function rechercheUser($nom){
			// On préapare la requête

			$query = $this->db->prepare(	"	SELECT *
												FROM smad_user

												WHERE smad_user.u_mail = ".$this->db->quote($nom)."
												OR smad_user.u_firstname = ".$this->db->quote($nom)."
												OR smad_user.u_firstname LIKE ".$this->db->quote($nom."%")."
												OR smad_user.u_lastname = ".$this->db->quote($nom)."
												OR smad_user.u_lastname LIKE ".$this->db->quote($nom."%")."
										");

			// On execute la requête
			$query->execute();

			// On récupère le résultat

			$result_account = $query->fetchAll(PDO::FETCH_ASSOC);

			// Vérification de l'existance du login

			$nbusers = sizeof($result_account);

			return array($nbusers,$result_account);
		}

		function updateUser($id,$firstname,$lastname,$mail,$company)
		{
			$query = $this->db->prepare(	"	UPDATE smad_user

												SET u_firstname = ".$this->db->quote($firstname).",
													u_lastname	= ".$this->db->quote($lastname).",
													u_mail		= ".$this->db->quote($mail).",
													u_company	= ".$company."

												WHERE smad_user.u_id = ".$id."
										");


			// On execute la requête
			$query->execute();

			header('Location: index.php?url=user&id='.$id.'&success=1');
		}


		function deleteUser($id){
			// On préapare la requête

			$query = $this->db->prepare(	"	DELETE
												FROM smad_user
												WHERE u_id = ".$this->db->quote($id)."
										");

			// On execute la requête
			$query->execute();

			$query = $this->db->prepare(	"	DELETE
												FROM smad_esta
												WHERE e_uid = ".$this->db->quote($id)."
										");

			// On execute la requête
			$query->execute();

			header('Location: index.php?url=users');
		}
	}
?>