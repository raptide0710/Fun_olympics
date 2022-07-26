<?php 
$servername = "127.0.0.1";
$serveruname = "root";
$serverpassword = "";
$serverdb = "fun";

$con = mysqli_connect($servername, $serveruname, $serverpassword, $serverdb);
if($con -> connect_error){
	die("Connection Unsuccessful ".$con ->  connect_error);
}
else{
	//echo "Connection Successful";
}
?>