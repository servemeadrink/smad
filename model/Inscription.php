<?php

    require "Model.php";

    class Inscription extends Model
    {
        function verifMail($mail)
        {
            // On préapare la requête

            $query = $this->db->prepare(	"	SELECT *
											FROM smad_user

											WHERE u_mail = " . $this->db->quote($mail) . "
										");

            // On execute la requête
            $query->execute();

            // On récupère le résultat

            $result_account = $query->fetchAll(PDO::FETCH_ASSOC);

            // Vérification de l'existance du login

            $verif_mail = sizeof($result_account);

            return array($verif_mail);
        }

        function inscript($firstname,$lastname,$mail,$password,$company)
        {
            $query = $this->db ->prepare(	"	    INSERT
													INTO smad_user

													SET
													u_firstname = " . $this->db->quote($firstname) . ",
													u_lastname = " . $this->db->quote($lastname) . ",
													u_mail = " . $this->db->quote($mail) . ",
													u_password = " . $this->db->quote($password) . ",
													u_company = " . $company . "

												");

            // On execute la requête
            $query->execute();

        }

        function recup($mail)
        {
            //On prépare la requete qui permettra
            $query = $this->db ->prepare(	"	    SELECT *
                                                    FROM smad_user

                                                    WHERE u_mail = " . $this->db->quote($mail) . "

												");

            // On execute la requête
            $query->execute();

            // On récupère le résultat

            $result_account = $query->fetchAll(PDO::FETCH_ASSOC);

            return array(current($result_account));

        }

    }


	
?>