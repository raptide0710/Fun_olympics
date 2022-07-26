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

//Connection for database
include 'connect.php';
//Select Database
$sql = "SELECT * FROM leaderboard";
$result = $con->query($sql);
?>

<html>
<head>
<title>update leaderboard</title>
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<?php 
include 'header.php';
?>

<h1 align="center">Update leaderboard </h1>

<div class="container" style="margin-top: 75px;">
            <div class="row">
                <div class="col-md-12">
                   <h2>Filter Table</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Type in here to filter the table bellow">
  <br>
                    <div class="table-responsive">
					<h6>
				<small class="text-muted">click on the update button after entering scores for a sport to update the scores</small>
				</h6>
<table border="1" align="center" class="table table-dark table-bordered table-hover" style="line-height:25px;">

<tr>
<th>ID</th>
<th>country</td>
<th>gold</th>
<th>silver</th>
<th>bronze</th>
<th>add gold medal</th>
<th>add silver medal</th>
<th>add bronze medal</th>
<th>update</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tbody id="myTable">	
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['country']; ?></td>
 <td><?php echo $row['gold']; ?></td>
 <td><?php echo $row['silver']; ?></td>
 <td><?php echo $row['bronze']; ?></td>
	<form action="edit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row["id"]; ?>" id="id" ></input>
	<input type="hidden" name="g" value="<?php echo $row["gold"]; ?>" id="g" ></input>
	<input type="hidden" name="s" value="<?php echo $row["silver"]; ?>" id="s" readonly></input>
	<input type="hidden" name="b" value="<?php echo $row["bronze"]; ?>" id="b" readonly></input>
	
	 <td><input value="0" type="number" name="gol" id="gol"  ></input><br></td>
	 <td><input value="0" type="number" name="sil" id="sil"  ></input><br></td>
	 <td><input value="0" type="number" name="bro" id="bro"  ></input><br></td>
	 <td><button class="btn btn-primary" type="subbmit" formmethod="post">update</button><br></td>
	</form>
 
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</tbody>
</table>
</div>
                </div>
            </div>
        </div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>