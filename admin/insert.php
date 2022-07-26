<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fun");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$info_id = mysqli_real_escape_string($link, $_REQUEST['info_id']);
$e_id = mysqli_real_escape_string($link, $_REQUEST['e_id']);
$details = mysqli_real_escape_string($link, $_REQUEST['details']);
$details_1 = mysqli_real_escape_string($link, $_REQUEST['details_1']);
$details_2 = mysqli_real_escape_string($link, $_REQUEST['details_2']);
$details_3 = mysqli_real_escape_string($link, $_REQUEST['details_3']);
$venue = mysqli_real_escape_string($link, $_REQUEST['venue']);
$details = mysqli_real_escape_string($link, $_REQUEST['details']);
$date_time1 = mysqli_real_escape_string($link, $_REQUEST['date_time1']);
$date_time2 = mysqli_real_escape_string($link, $_REQUEST['date_time2']);
$date_time3 = mysqli_real_escape_string($link, $_REQUEST['date_time3']);
$date_time4 = mysqli_real_escape_string($link, $_REQUEST['date_time4']);

 
// Attempt insert query execution
$sql = "INSERT INTO information (info_id, e_id, details,details_1,details_2,details_3,venue,date_time1,date_time2,date_time3,date_time4) VALUES ('$info_id', '$e_id', '$details','$details_1', '$details_2', '$details_3','$venue', '$date_time1', '$date_time2','$date_time3', '$date_time4')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	header( 'refresh:3, url = add.php' ) ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>