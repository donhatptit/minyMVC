<?php
	require_once('Model/SubjectModel.php');
	class SubjectController{
		public function getSubject(){
			$submodel = new SubjectModel();
			$record_per_page = 8;
			$total = $submodel->numRows();
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
			$subcontrol = $submodel->getSubject($from, $record_per_page);
			require('View/Admin/Subject.php');
		}
	}
?>