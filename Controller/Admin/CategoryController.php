<?php
	require_once('Model/CategoryModel.php');
	class CategoryController{
		public function getCate(){
			$catemodel = new CategoryModel();
			$record_per_page = 8;
			$total = $catemodel->numRows();
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
			$catecontrol = $catemodel->getCate($from, $record_per_page);
			require('View/Admin/Category.php');
		}
	}
?>