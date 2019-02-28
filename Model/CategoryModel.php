<?php  
	class CategoryModel extends DataBase{
		public function getCate($a, $b)
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_class order by class_id desc limit $a, $b";
			$result = mysqli_query($db->conn, $sql);
			return $result;
		}
		public function numRows()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT class_id FROM tbl_class" ;
			$total = mysqli_query($db->conn, $sql);
			return mysqli_num_rows($total);
		}
		//Client
		public function getMenu()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_class order by class_id desc";
			$query = mysqli_query($db->conn, $sql);
			$data = [];
			while ($result = mysqli_fetch_array($query)) {
				array_push($data, $result);
			};
			return $data;
		}
		public function getCateHome(){
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_class order by class_id desc limit 3,2";
			$query = mysqli_query($db->conn, $sql);
			$data = [];
			while ($result = mysqli_fetch_array($query)) {
				array_push($data, $result);
			};
			return $data;
		}
	}
?>