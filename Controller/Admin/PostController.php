<?php
require_once('Model/PostModel.php');
	class PostController{
		public function getPost(){
			$postmodel = new PostModel();
			$record_per_page = 5;
			$total = $postmodel->numRows();
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
			$postcontrol = $postmodel->getPost($from, $record_per_page);
			require('View/Admin/Post.php');
		}
	}
?>