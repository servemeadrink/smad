<?php
	
	include('model/Connexion.php');
	
	class ConnexionController
	{
		public $mail;
		public $password;
			
		/* Mail */
			
		function getMail()
		{
			return $this->mail;
		}
		
		function setMail($value)
		{
			if(is_string($value))
			{
				$this->mail = $value;
			}
			else
			{
				throw new Exception('La valeur doit être une chaîne de caractères.');
			}
		}
		
		/* Password */
		
		function getPassword()
		{
			return $this->password;
		}
		
		function setPassword($value)
		{
			if(is_string($value))
			{
				$this->password = md5($value);
			}
			else
			{
				throw new Exception('La valeur doit être une chaîne de caractères.');
			}
		}
			
		function logIn()
		{
			if( (!empty($_POST['co_email']) && !empty($_POST['co_password'])) OR (isset($_COOKIE['u_mail']) && isset($_COOKIE['u_password'])) )
			{
				if(isset($_POST['co_email']) && isset($_POST['co_password']))
				{
					$this->setMail($_POST['co_email']);
					$this->setPassword($_POST['co_password']);
				}
				
				$connect = new Connexion();
				
				if(isset($_POST['co_email']))
				{
					$log = $connect->connect($this->getMail());
				}
				else
				{
					$log = $connect->connect($_COOKIE['u_mail']);
				}
				
				if( $log[0] == 1 )
				{
					//S'il y a le password en cookie
					if(isset($_COOKIE['u_password']))
					{
						$pass = $_COOKIE['u_password'];
					}
					else
					{
						$pass = $this->getPassword();
					}

					
					if( $pass == $log[1]['u_password'] )
					{
						// On sauvegarde toutes les valeurs de l'internaute en session
						$_SESSION['u_id'] = $log[1]['u_id'];
						$_SESSION['u_firstname'] = $log[1]['u_firstname'];
						$_SESSION['u_lastname'] = $log[1]['u_lastname'];
						$_SESSION['u_mail'] = $log[1]['u_mail'];
						$_SESSION['u_company'] = $log[1]['u_company'];
						
						//Si la personne veut rester connecter, on crée les cookie pour 1h
						if( isset($_POST['co_stay']) )
						{
							setcookie("u_mail", $log[1]['u_mail'], time()+3600, '/');
							setcookie("u_password", $log[1]['u_password'], time()+3600, '/');
						}
						
						//On redirige le particulier vers l'index 2
						
						if( $_SESSION['u_company'] == 0 )
						{
							$data = array(
								"ERROR" => 4
							);
						}
						
						//On redirige l'entreprise vers la page de gestion
						
						if( $_SESSION['u_company'] == 1 )
						{
							$data = array(
								"ERROR" => 5
							);
						}
						
					}
					else
					{
						$data = array(
							"ERROR" => 3
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
			
			//On encode en json les résultats de la requête afin de récupérer l'erreur et l'afficher

			if( isset($data) )
			{
				echo json_encode($data);
			}
		}
	}
	
	$controller = new ConnexionController;
	$controller-> logIn();
?>