<?php
require "Model.php";

class Etablissement extends Model
{
    function afficheEstas(){
        // On préapare la requête

        $query = $this->db->prepare(	"	SELECT *
                                            FROM smad_esta

										    LEFT JOIN smad_user
										    ON smad_esta.e_uid = smad_user.u_id
										");

        // On execute la requête
        $query->execute();

        // On récupère le résultat

        $result_esta = $query->fetchAll(PDO::FETCH_ASSOC);

        // Vérification de l'existance du login

        $nb_esta = sizeof($result_esta);

        return array($nb_esta,$result_esta);
    }

    function deleteEsta($id){
        // On préapare la requête

        $query = $this->db->prepare(	"	DELETE
												FROM smad_esta
												WHERE e_id = ".$this->db->quote($id)."
										");

        // On execute la requête
        $query->execute();

        header('Location: index.php?url=etablissement');
    }
}
?>