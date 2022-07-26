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
include 'header.php';
?>

	<header class="page-header header container-fluid">
		<div class="overlay"></div>
		<div class="description">
    <h1>Welcome to the Home Page!</h1>
    <p>The Yokyo Organising Committee of the FunOlympic and Paralympic Games (Yokyo2020) welcome you to enjoy the FunOlympic games from home.</p>
	<p><?php echo $aname ?> you may now update the leaderboard and have access to all user account functionality (view leaderboard and calendar)</p>
	<p>while at home stay safe and follow Covid 19 guidelines</p>
	<p>Thank you!!!</p>
</div>
	</header>
	
	<script src="../js/main.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.6.0.min.js"></script>
    </body>
    
</html>