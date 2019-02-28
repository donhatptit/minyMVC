<?php
require("Model/CategoryModel.php");
class MenuController
{
	public function getMenu()
	{
		$catemodel = new CategoryModel();
		$cateControl = $catemodel->getMenu();
		require("View/Client/Menu.php");
	}
}
?>