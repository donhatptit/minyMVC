<?php  
	class UserModel extends DataBase{
		public function Login($username, $password){
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
			$user = mysqli_query($db->conn, $sql);
			return $user;
		}
		public function getUser($a, $b)
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_user order by id_user desc limit $a, $b";
			$result = mysqli_query($db->conn, $sql);
			return $result;
		}
		public function numRows()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT id_user FROM tbl_user" ;
			$total = mysqli_query($db->conn, $sql);
			return mysqli_num_rows($total);
		}
		public function AddUser()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "INSERT INTO tbl_user(fullname, email, username, password, level) values('$fullname','$email','$username','$password','$level')";
			$result = mysqli_query($db->conn, $sql);
			return $result;
		}
		public function EditUser()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "INSERT INTO tbl_user(fullname, email, username, password, level) values('$fullname','$email','$username','$password','$level')";
			$result = mysqli_query($db->conn, $sql);
			return $result;
		}
	}
?>