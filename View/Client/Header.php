<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="Public/Client/css/style.css">
	<link rel="stylesheet" type="text/css" href="Public/Client/css/chitiet.css">
	<!-- Latest compiled and minified CSS & JS -->
	
	<script src="//code.jquery.com/jquery.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="Public/Client/images/trang-chu/logo.png">
	<link rel="stylesheet" type="text/css" href="Public/Client/login.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">

</style>
<script type="text/javascript">
	
</script>
<body>
		<div id="wrap">
		<div class="layer_opacity"></div>
		<!-- start header -->
		<div class="header">
			<div class="header-left">
				<div class="images-logo">
					<a href="trang-chu"><img src="Public/Client/images/trang-chu/logo.png"></a>
				</div>
				
			</div>
			<div class="header-right">
				<!-- <div class="search-container"> -->
					<form class="search-container" method="POST">
						<i class=" icon fa fa-search"></i>
						<input class="f-regular-14 search" autocomplete="off" name="key" type="text" id="search" placeholder="Tìm kiếm câu hỏi">
						<input type="hidden" name="ok">
					</form>
					<!-- </div> -->
				</div>
				<?php  
				//  if(isset($_POST['ok'])){
				// 	$key = $_POST["key"];
				// 	header("location: index.php?controller=search&key=$key");
				// } 
				?>
			</div>
			
		</div>
		<!-- end header -->
		<div class="mobile-header d-none">
			<!-- Icon NavBar - Mobile -->
			<div id="icon-nav"><i class="fa fa-bars"></i></div>
			<!-- NavSearch - Mobile -->
			
			<form class="search-container" method="POST">
				<i class="icon fa fa-search"></i>
				<input class="f-regular-12" type="text" autocomplete="off"  name="key" placeholder="Tìm kiếm câu hỏi">
				<input type="hidden" name="ok">
			</form>
			
			
		</div>
		<!-- start menu -->
		
		<div style="clear: both;">
			
		</div>
		
		<div class="menu">
			<div class="logo">
				<a class="d-none" href=""><img src="Public/Client/images/trang-chu/logo.png" alt=""></a>
				<i class="close-nav-mobile d-none fa fa-arrow-left"></i>
				
			</div>
			<div class=" menu-name">
				<p>Danh mục</p>
			</div>
			<div class="menu-primary">
				<ul>
					<?php
					include "View/Client/Menu.php";
					?>
					
				</ul>
			</div>
		</div>