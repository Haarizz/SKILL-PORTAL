<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<button class="btn"><i class="fa fa-home"></i></button>

<?php
$username=$_POST['username'];
$password=$_POST['password'];
if($username=="amal" && $password==12345)
{
	header('Location:home.html');
}
else{
	echo ("incorrect password and username");
}
?>
</body>
</html>