<?php
//Database Connection
include 'connect.php';
	$id = $_POST['id'];
	$g = $_POST['g'];
	$gol = $_POST['gol'];
	$s = $_POST['s'];
	$sil = $_POST['sil'];
	$b = $_POST['b'];
	$bro = $_POST['bro'];

 // gold
	$value1= $g;

	$value2= $gol;

	$value3= $g + $gol;
	
	$q = "update leaderboard set gold = $value3 
	where id = $id ";	
	//the sql statment is executed and checked for errors 
	$result = $con->query($q);

 // silver	
	$value4= $s;

	$value5= $sil;

	$value6= $s + $sil;
	

$sql = "update leaderboard set silver = $value6 
	where id = $id ";	
	//the sql statment is executed and checked for errors 
	$result = $con->query($sql);

 // bronze
	$value7= $b;

	$value8= $bro;

	$value9= $b + $bro;

$sql1 = "update leaderboard set bronze = $value9 
	where id = $id ";	
	//the sql statment is executed and checked for errors 
	$result = $con->query($sql1);

	header('refresh:0, url = update_score.php');
	
?>
