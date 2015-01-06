<?php

	class Model{

		protected $db;

		function __construct(){

			$conn = NULL;

			try{
				$conn = new PDO("mysql:host=kiyanmcoota.mysql.db;dbname=kiyanmcoota", "kiyanmcoota", "Aqzsed123456");
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->db = $conn;
				} 
			
			catch(PDOException $e){
					echo 'ERROR: ' . $e->getMessage();
					}    
				
		}
		
	}

?>