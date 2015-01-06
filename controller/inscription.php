<?php
	
	include('model/Inscription.php');


    class InscriptionController
    {
        // GETTERS ET SETTERS ---------------------------------------------------------------------

        //Firstname
        public $firstname;

        function setFirstname($value)
        {
            $this->firstname = $value;
        }

        function getFirstname()
        {
            return $this->firstname;
        }

        //Lastname
        public $lastname;

        function setLastname($value)
        {
            $this->lastname = $value;
        }

        function getLastname()
        {
            return $this->lastname;
        }

        //Mail
        public $mail;

        function setMail($value)
        {
            $this->mail = $value;
        }

        function getMail()
        {
            return $this->mail;
        }

        //Password
        public $password;

        function setPassword($value)
        {
            $this->password = md5($value);
        }

        function getPassword()
        {
            return $this->password;
        }

        //Confirm Password
        public $confirm;

        function setConfirm($value)
        {
            $this->confirm = md5($value);
        }

        function getConfirm()
        {
            return $this->confirm;
        }


        //-------------------------------------------------------------------------------------------

        function Inscript()
        {
            if(!empty($_POST['u_firstname']) && !empty($_POST['u_lastname']) && !empty($_POST['u_email']) &&
                !empty($_POST['u_password']) && !empty($_POST['u_confirm']) )
            {
                $this->setFirstname($_POST['u_firstname']);
                $this->setLastname($_POST['u_lastname']);
                $this->setMail($_POST['u_email']);
                $this->setPassword($_POST['u_password']);
                $this->setConfirm($_POST['u_confirm']);

                $inscript = new Inscription();
                $verif = $inscript->verifMail($this->getMail());

                if($verif[0] == 0)
                {
                    if($this->getPassword() == $this->getConfirm())
                    {
                        $_SESSION['inscription']['firstname'] = $this->getFirstname();
                        $_SESSION['inscription']['lastname'] = $this->getLastname();
                        $_SESSION['inscription']['mail'] = $this->getMail();
                        $_SESSION['inscription']['password'] = $this->getPassword();

                        $data = array(
                            "ERROR" => 5
                        );


                    }
                    else
                    {
                        $data = array(
                            "ERROR" => 4
                        );
                    }
                }
                else
                {
                    $data = array(
                        "ERROR" => 2
                    );
                }

            }
            else
            {
                $data = array(
                    "ERROR" => 1
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