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
<html>
<head>
<title>FunOlympics Leaderboard </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.6.0.min.js"></script>
</head>
<?php
include "connect.php"
?>
<body>
	<?php 
include 'header.php';
?>

		<div class="container" style="margin-top: 75px;">
            <div class="row">
                <div class="col-md-12">
				
                   <center> <h1>leaderboard</h1></center>
				<h2>Filterable Table</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Type in here to filter the table bellow">
  <br>

                    <div class="table-responsive">
                      
						<table id="myTable" class="table table-bordered table-dark table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Country</th>
                                <th>Gold</th>
                                <th>Silver</th>
                                <th>Bronze</th>
                            </thead>
                            <?php

                        $result = mysqli_query($con, "SELECT * FROM leaderboard");

                        while($row = mysqli_fetch_array($result))
                        {
                            ?>
							<tbody id="myTable">
                                <tr class="tr">
                                    <td>
                                        <?= $row['id']; ?>
                                    </td>
                                    <td>
                                        <?= $row['country']; ?>
                                    </td>
                                    <td>
                                        <?= $row['gold']; ?>
                                    </td>
                                    <td>
                                        <?= $row['silver']; ?>
                                    </td>
                                    <td>
                                        <?= $row['bronze']; ?>
                                    </td>
                                </tr>
                                <?php } ?>
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