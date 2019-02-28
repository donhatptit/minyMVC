<?php
require_once('Model/UserModel.php');
	class UserController{
		public function getUser()
		{
			$usermodel = new UserModel();
			$record_per_page = 2;
			$total = $usermodel->numRows();
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
			$usercontrol = $usermodel->getUser($from, $record_per_page);
			require('View/Admin/User.php');
		}
		public function addUser(){
			require("View/Admin/AddEditUser.php");
			$usermodel = new UserModel();
			
		}
	}
?>