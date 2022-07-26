<?php
session_start();

include "connect.php";

$aname = $_SESSION['aname'];

$sql = "select id from admin where aname = '$aname'";

$run = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($run)){
    $id = $row['id'];
}

$get_admin = "select * from admin where id = '$id'";

$admin = $con->query($get_admin);
$admin_details = mysqli_fetch_assoc($admin);
?>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	</head>
    
    <body>
	
 <?php
include "header.php";
           ?>
	
	<header class="page-header header container-fluid">
		<div class="overlay"></div>
		<div class="description">
		<br> <br><br><br><br>
    <h1>Games Motto</h1>
	<b>UNITED BY EMOTION</b>
	
	<h1>About us</h1>
	<p>Due to the pandemic caused by the Covid 19 virus the FunOlympic committee have decided to run the 2020/21 games without the public attending the site. </p>
	
	<h1>Covid-19 Guidelines</h1>

	<ul>
		<li class="text-white">Wear a mask that covers your nose and mouth to help protect yourself and others.</li>
		<li class="text-white">Stay 6 feet apart from others who don’t live with you.</li>
		<li class="text-white">Get a COVID-19 vaccine when it is available to you.</li>
		<li class="text-white">Avoid crowds and poorly ventilated indoor spaces.</li>
		<li class="text-white">Wash your hands often with soap and water. Use hand sanitizer if soap and water aren’t available. </li>
	
	<p>while at home stay safe and follow Covid 19 guidelines</p>
	<p>Thank you!!!</p>
</div>
	</header>
	
	<script src="../js/main.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.6.0.min.js"></script>
    </body>
    
</html>