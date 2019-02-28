<?php
require("Model/CategoryModel.php");
require("Model/SubjectModel.php");
require("Model/PostModel.php");
	class HomeController{
		public function index(){
			$catemodel = new CategoryModel();
			$submodel = new SubjectModel();
			$postmodel = new PostModel();
			$cateControl = $catemodel->getMenu();
			// $subControl = [];
			$data = [];
			foreach ($cateControl as $key => $value) {
					$data[$value['class']]= $value;
				$index = array_search($value, $cateControl);
				if($index !== false){
				$data[$value['class']]['subject'] = $submodel->getMenuSub($value["class_id"]);
				}
			}

			$postcontrol = $postmodel->getAllPost();
			$cateHomeControl = $catemodel->getcateHome();
			
			$sub = [];
			foreach ($cateHomeControl as $key => $value) {
					$sub[$value['class']]= $value;
				$index = array_search($value, $cateHomeControl);
				if($index !== false){
				$sub[$value['class']]['subject'] = $submodel->getCateHomeSub($value["class_id"]);
				}
			}
			// echo "<pre>";
			// 	print_r($sub);
			// 	die();
			// echo "<pre>";
			// print_r($data);
			// die;
			require("View/Client/Home.php");
		}
	}
?>