<?php

include('model/Inscription.php');


class InscriptionController
{
    // GETTERS ET SETTERS ---------------------------------------------------------------------

    //Company
    public $company;

    function setCompany($value)
    {
      $this->company = $value;
    }

    function getCompany()
    {
      return $this->company;
    }

    //-------------------------------------------------------------------------------------------

    function Inscript()
    {
        if(isset($_POST['u_nature']) )
        {
            $this->setCompany($_POST['u_nature']);
            $inscript = new Inscription();

            $inscription =  $inscript->inscript(
                                $_SESSION['inscription']['firstname'],
                                $_SESSION['inscription']['lastname'],
                                $_SESSION['inscription']['mail'],
                                $_SESSION['inscription']['password'],
                                $this->getCompany());

            $recuperation = $inscript->recup($_SESSION['inscription']['mail']);

            // On sauvegarde toutes les valeurs de l'internaute en session
            $_SESSION['u_id'] = $recuperation[0]['u_id'];
            $_SESSION['u_firstname'] = $recuperation[0]['u_firstname'];
            $_SESSION['u_lastname'] = $recuperation[0]['u_lastname'];
            $_SESSION['u_mail'] = $recuperation[0]['u_mail'];
            $_SESSION['u_company'] = $recuperation[0]['u_company'];

            //Si l'inscris est utilisateur
            if($this->getCompany() == 0)
            {
                $data = array(
                    "ERROR" => 6
                );
            }


            //Si l'inscris est professionel
            if($this->getCompany() == 1)
            {
                $data = array(
                    "ERROR" => 7
                );
            }
        }
        else
        {
            $data = array(
                "ERROR" => 3
            );
        }

        if(isset($data))
        {
            echo json_encode($data);
        }
    }
}

$controller = new InscriptionController;
$controller-> inscript();

?>