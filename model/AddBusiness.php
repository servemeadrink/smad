<?php
	require "Model.php";
	
	class Esta extends Model
	{
		function AddEsta($uid,$e_name,$e_city,$e_address,$e_descript,$e_nature,$e_country,$e_zip,$e_phone,
						 $e_mail, $e_url_business, $e_url_showroom)
		{
			try
			{
				$query = $this->db ->prepare(	"	    INSERT
														INTO smad_esta

														SET
														e_uid = " . $uid . ",
														e_name = " . $this->db->quote($e_name) . ",
														e_city = " . $this->db->quote($e_city) . ",
														e_address = " . $this->db->quote($e_address) . ",
														e_descript = " . $this->db->quote($e_descript) . ",
														e_nature = " . $e_nature . ",
														e_country = " . $this->db->quote($e_country) . ",
														e_zip = " . $e_zip . ",
														e_phone = " . $this->db->quote($e_phone) . ",
														e_email = " . $this->db->quote($e_mail) . ",
														e_url_business = " . $this->db->quote($e_url_business) . ",
														e_url_showroom = " . $this->db->quote($e_url_showroom) . "
												");

				// On execute la requête
				$query->execute();
			}
			catch( Exception $e)
			{
				$e->getMessage();
			}
		}

		function memoryEsta($uid,$e_name){
			// On préapare la requête

			$query = $this->db->prepare(	"	SELECT *
												FROM smad_esta

												WHERE e_uid = ".$uid."

												AND e_name = ".$this->db->quote($e_name)."
										");

			// On execute la requête
			$query->execute();

			// On récupère le résultat

			$result = $query->fetchAll(PDO::FETCH_ASSOC);

			// Vérification de l'existance du login

			return array(current($result));
		}

		function memoryEstaEid($e_id){
			// On préapare la requête

			$query = $this->db->prepare(	"	SELECT *
												FROM smad_esta

												WHERE e_id = ".$e_id."
										");

			// On execute la requête
			$query->execute();

			// On récupère le résultat

			$result = $query->fetchAll(PDO::FETCH_ASSOC);

			// Vérification de l'existance du login

			return array(current($result));
		}
	}


?>