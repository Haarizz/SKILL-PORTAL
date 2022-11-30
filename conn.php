<?php

$servername="localhost";
$username="root";
$password="";
$dbname="skillportal";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['username'])){


$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM login WHERE username='".$username."' AND password='".$password."' limit 1";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
header("location:home.html");
exit();
}
else{
echo "Incorrect Username or Password";
exit();
}
}


?>

