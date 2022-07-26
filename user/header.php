<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>
<nav class="navbar navbar-expand-md">
		 <a class="navbar-brand" href="#">
			<img background="white" src="../img/logo.png" width="50" height="50" alt="">
		 </a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="uindex.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="uabout.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="uleaderboard.php">leaderboards</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="ucal.php">calendar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">logout</a>
				</li>
				<li class="nav-item">
				<a class="nav-link"> logged in as: <?php echo $username ?> </a>
				</li>
			</ul>
		</div>
	</nav>
<script src="js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>  
  </body>