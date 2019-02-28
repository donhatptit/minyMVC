<?php  
	class PostModel extends DataBase{
		public function getPost($a, $b)
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_post order by post_id desc limit $a, $b";
			$result = mysqli_query($db->conn, $sql);
			return $result;
		}
		public function numRows()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT post_id FROM tbl_post" ;
			$total = mysqli_query($db->conn, $sql);
			return mysqli_num_rows($total);
		}
		//Client
		public function getAllPost()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_post order by post_id desc limit 0,6";
			$query = mysqli_query($db->conn, $sql);
			$data = [];
			while ($result = mysqli_fetch_array($query)) {
				array_push($data, $result);
			};
			return $data;
		}
		
	}
?>