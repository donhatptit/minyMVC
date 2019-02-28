<?php
require_once('Model/UserModel.php');
class LoginController{
	public function Login()
	{ 
		require('View/Admin/Login.php');
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$username = isset($_POST['username'])? $_POST['username']: '' ;
			$password = isset($_POST['password'])? $_POST['password']: '' ;
			$pass = md5($password);
			$usermodel = new UserModel();
			$user = $usermodel->Login($username ,$pass);
			$count = mysqli_num_rows($user);
				if($count>0){
					$data = mysqli_fetch_array($user);
					$_SESSION["username"] = $data;
					header("Location:admin.php?action=Home");
				}
				else
				{
					echo "<script>alert('Tài khoản hoặc mật khẩu không đúng !');</script>";
					require_once('View/Admin/Login.php');
				}
		}
		else
		{
			require_once('View/Admin/Login.php');
		}
	}
	public function Logout()
	{
		unset($_SESSION['username']);
		session_destroy();
		header("Location:admin.php?action=LoginController");
	}
}
?>
