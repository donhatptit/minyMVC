<?php  
	session_start();
	require('Config/Connect.php');
?>

	<?php
		$db = new DataBase();
			$db->connect();
			if(!isset($_GET["action"])){
				require('Controller/Client/HomeController.php');
				$user = new HomeController();
				$user->index();
			}
			else{
				// $action = $_GET['action'];
				if($_GET["action"]=='LoginController'){
					require('Controller/Admin/LoginController.php');
					$user = new LoginController();
					$user->Login();
					// $user->Logout();
				} 
				if($_GET["action"]=='LogoutController'){
					require('Controller/Admin/LoginController.php');
					$user = new LoginController();
					$user->Logout();
				} 
				if($_GET["action"]=='Home'){
					require('Controller/Admin/HomeController.php');
					$user = new HomeController();
					$user->Home();
				}
				if($_GET["action"]=='UserController'){
					require('Controller/Admin/UserController.php');
					$user = new UserController();
					$user->getUser();
				}
				if($_GET["action"]=='AddEditUser'){
					require('Controller/Admin/UserController.php');
					$user = new UserController();
					$user->addUser();
				}
				if($_GET["action"]=='SubjectController'){
					require('Controller/Admin/SubjectController.php');
					$user = new SubjectController();
					$user->getSubject();
				}
				if($_GET["action"]=='CategoryController'){
					require('Controller/Admin/CategoryController.php');
					$user = new CategoryController();
					$user->getCate();
				}
				if($_GET["action"]=='PostController'){
					require('Controller/Admin/PostController.php');
					$user = new PostController();
					$user->getPost();
				}
			
			}

	?>
