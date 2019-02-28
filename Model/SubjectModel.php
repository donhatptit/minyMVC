<?php  
	class SubjectModel extends DataBase{
		public function getSubject($a, $b)
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_subject order by subject_id desc limit $a, $b";
			$result = mysqli_query($db->conn, $sql);
			return $result;
		}
		public function numRows()
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT subject_id FROM tbl_subject" ;
			$total = mysqli_query($db->conn, $sql);
			return mysqli_num_rows($total);
		}
		//Client
		public function getMenuSub($class_id)
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_subject where class_id = $class_id";
			$query = mysqli_query($db->conn, $sql);
			$data = [];
			while ($result = mysqli_fetch_object($query)) {
				array_push($data, $result);
			};
			return $data;
		}

		public function getCateHomeSub($class_id)
		{
			$db = new DataBase();
			$db->connect();
			$sql = "SELECT * FROM tbl_subject where class_id = $class_id limit 0,4";
			$query = mysqli_query($db->conn, $sql);
			$data = [];
			while ($result = mysqli_fetch_object($query)) {
				array_push($data, $result);
			};
			return $data;
		}
		
	}
?>