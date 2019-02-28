
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Public/Admin/css/style.css">
	<link rel="shortcut icon" href="Public/Client/images/trang-chu/logo.png">
</head>
<style type="text/css">
	 input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
#mess{
	text-align: center;
	font-style: italic;
	color: red;
}
</style>
<body>
	<div class="login">
		<div class="form_login">
		<form action="" method="post" class="container">
			<h1>Login</h1>
			<label for="user"><b>Username:</b></label>
			<input type="text" name="username" placeholder="Enter Username" required="">
			<label for="pass"><b>Password:</b></label>
			<input type="password" name="password" placeholder="Enter Password" id="myInput" required="">
			<input type="checkbox" onclick="showpass();" name="">Show password
			<div id="mess"></div>
			<input type="submit" name="ok" value="Login" class="btn1">
			
		</form>
		</div>
	</div>
</body>
<script src="Public/Admin/js/login.js"></script>

</html>