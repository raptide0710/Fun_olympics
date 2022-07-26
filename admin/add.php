<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<?php
include('connect.php');
$query=(" select * from information ORDER BY info_id DESC LIMIT 1");
 $result = mysqli_query($con, $query)or die("Error: ".mysqli_error($con));   
?>
<form action="insert.php" method="post">
    <p>
        <label for="info_id">info_id:</label>
        <input type="number" name="info_id" id="firstName" value="<?php while ($row = $result->fetch_assoc()) { echo $row['info_id']+1; }?>" readonly>
    </p>
    <p>
        <label for="e_id">e_id:</label>
        <input type="number" name="e_id" id="lastName">
    </p>
	<h1>---------------------------------------------------------------</h1>
    <p>
        <label for="details">details:</label>
        <input type="text" name="details" id="emailAddress" style="width:1200px;">
    </p>
	 <p>
        <label for="date_time1">date_time1:</label>
        <input type="text" name="date_time1" id="lastName">
    </p>
	<h1>---------------------------------------------------------------</h1>
	<p>
        <label for="details_1">details_1:</label>
        <input type="text" name="details_1" id="firstName"style="width:1200px;">
    </p>
	<p>
        <label for="date_time2">date_time2:</label>
        <input type="text" name="date_time2" id="emailAddress">
    </p>
	<h1>---------------------------------------------------------------</h1>
    <p>
        <label for="details_2">details_2:</label>
        <input type="text" name="details_2" id="lastName"style="width:1200px;">
    </p>
	<p>
        <label for="date_time3">date_time3:</label>
        <input type="text" name="date_time3" id="firstName">
    </p>
	<h1>---------------------------------------------------------------</h1>
    <p>
        <label for="details_3">details_3:</label>
        <input type="text" name="details_3" id="emailAddress"style="width:1200px;">
    </p>
	 <p>
        <label for="date_time4">date_time4:</label>
        <input type="text" name="date_time4" id="lastName">
    </p>
	<p>
        <label for="venue">venue:</label>
        <input type="text" name="venue" id="firstName">
    </p>
   
    
	
   
   
    <input type="submit" value="Submit">
</form>
</body>
</html>
