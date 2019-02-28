<?php
	class DataBase{
		private $server = "localhost";
		private $user = "root";
		private $password = "";
		private $db = "demo_project";
		public $conn = NULL;
		public function connect(){
			$this->conn = mysqli_connect($this->server,$this->user,$this->password,$this->db);
			if($this->conn){
				mysqli_set_charset($this->conn, "UTF8");
				
			}
			

		}
		
	}
	
?>